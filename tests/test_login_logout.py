import pytest
from selenium import webdriver
from selenium.common.exceptions import TimeoutException
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time


@pytest.fixture(params=["chrome", "firefox"], scope="class")
def driver(request):
    if request.param == "chrome":
        driver = webdriver.Chrome()
    elif request.param == "firefox":
        driver = webdriver.Firefox()
    driver.implicitly_wait(10)  # Chờ ngầm định
    driver.get('http://localhost/opencart/upload/index.php?route=account/login&language=en-gb')

    WebDriverWait(driver, 20).until(
        EC.presence_of_element_located((By.ID, 'input-email'))
    )

    yield driver
    driver.quit()


def reset_form(driver):
    """Hàm để reset lại form bằng cách làm mới trang."""
    driver.get('http://localhost/opencart/upload/index.php?route=account/login&language=en-gb')
    time.sleep(2)  # Thêm thời gian chờ để đảm bảo trang tải hoàn toàn


def test_login_logout(driver):
    """Kiểm tra chức năng đăng nhập và đăng xuất."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Bước 1: Tìm trường 'Email' và 'Password' để chuẩn bị đăng nhập
    email = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-email'))
    )
    password = driver.find_element(By.ID, 'input-password')

    # Bước 2: Xóa mọi dữ liệu hiện có trong trường 'Email' và 'Password'
    email.clear()
    password.clear()

    # Bước 3: Nhập thông tin đăng nhập hợp lệ
    email.send_keys('namtronghlg0903@gmail.com')  # Thay bằng địa chỉ email hợp lệ
    password.send_keys('123456')  # Thay bằng mật khẩu hợp lệ

    # Bước 4: Nhấp vào nút 'Login' để đăng nhập
    login_button = driver.find_element(By.CSS_SELECTOR, 'button[type="submit"]')
    login_button.click()

    # Điểm xác nhận 1: Kiểm tra tiêu đề của trang để xác nhận đăng nhập thành công
    assert WebDriverWait(driver, 10).until(
        EC.title_contains('My Account')
    ), "Đăng nhập không thành công, không vào được trang 'My Account'."

    # Bước 5: Mở menu 'My Account' để tìm liên kết đăng xuất
    my_account_menu = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.LINK_TEXT, 'My Account'))
    )
    my_account_menu.click()

    # Bước 6: Nhấp vào liên kết 'Logout' để đăng xuất khỏi tài khoản
    logout_link = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.LINK_TEXT, 'Logout'))
    )
    logout_link.click()

    # Điểm xác nhận 2: Kiểm tra tiêu đề của trang để xác nhận đăng xuất thành công
    assert WebDriverWait(driver, 10).until(
        EC.title_contains('Account Logout')
    ), "Đăng xuất không thành công, không vào được trang 'Account Logout'."


def test_login_incorrect_password(driver):
    """Kiểm tra chức năng đăng nhập với mật khẩu không chính xác."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Bước 1: Tìm trường 'Email' và 'Password' để chuẩn bị đăng nhập
    email = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-email'))
    )
    password = driver.find_element(By.ID, 'input-password')

    # Bước 2: Xóa mọi dữ liệu hiện có trong trường 'Email' và 'Password'
    email.clear()
    password.clear()

    # Bước 3: Nhập email hợp lệ và mật khẩu không chính xác
    email.send_keys('namtronghlg0903@gmail.com')  # Nhập địa chỉ email hợp lệ
    password.send_keys('wrongpassword')  # Nhập mật khẩu không chính xác

    # Bước 4: Nhấp vào nút 'Login' để gửi yêu cầu đăng nhập
    login_button = driver.find_element(By.CSS_SELECTOR, 'button[type="submit"]')
    login_button.click()

    # Thời gian chờ ngắn để đảm bảo thông báo lỗi xuất hiện
    time.sleep(0.5)

    # Điểm xác nhận: Kiểm tra rằng thông báo lỗi hiển thị khi nhập sai mật khẩu
    # Kiểm tra nội dung của `page_source` để xác nhận thông báo lỗi
    page_source = driver.page_source
    assert 'Warning: No match for E-Mail Address and/or Password.' in page_source, \
        "Không hiển thị thông báo lỗi khi mật khẩu không chính xác."


def test_login_nonexistent_account(driver):
    """Kiểm tra chức năng đăng nhập với tài khoản không tồn tại."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Bước 1: Tìm trường 'Email' và 'Password' để chuẩn bị đăng nhập
    email = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-email'))
    )
    password = driver.find_element(By.ID, 'input-password')

    # Bước 2: Xóa mọi dữ liệu hiện có trong trường 'Email' và 'Password'
    email.clear()
    password.clear()

    # Bước 3: Nhập địa chỉ email không tồn tại và mật khẩu bất kỳ
    email.send_keys('nonexistentuser@gmail.com')  # Địa chỉ email không tồn tại trong hệ thống
    password.send_keys('any_password')  # Mật khẩu có thể là bất kỳ, vì tài khoản không tồn tại

    # Bước 4: Nhấp vào nút 'Login' để gửi yêu cầu đăng nhập
    login_button = driver.find_element(By.CSS_SELECTOR, 'button[type="submit"]')
    login_button.click()

    # Thời gian chờ ngắn để đảm bảo thông báo lỗi xuất hiện
    time.sleep(0.5)

    # Điểm xác nhận: Kiểm tra rằng thông báo lỗi xuất hiện khi đăng nhập với tài khoản không tồn tại
    # Kiểm tra nội dung của `page_source` để xác nhận thông báo lỗi
    page_source = driver.page_source
    assert 'Warning: No match for E-Mail Address and/or Password.' in page_source, \
        "Không hiển thị thông báo lỗi khi tài khoản không tồn tại."


def test_login_without_password(driver):
    """Kiểm tra chức năng đăng nhập khi không nhập mật khẩu."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Bước 1: Tìm trường 'Email' và nhập địa chỉ email hợp lệ
    email = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-email'))
    )
    email.clear()
    email.send_keys('namtronghlg0903@gmail.com')  # Nhập địa chỉ email hợp lệ

    # Bỏ qua việc nhập mật khẩu để kiểm tra trường hợp không có mật khẩu

    # Bước 2: Nhấp vào nút 'Login' để gửi yêu cầu đăng nhập mà không có mật khẩu
    login_button = driver.find_element(By.CSS_SELECTOR, 'button[type="submit"]')
    login_button.click()

    # Thời gian chờ ngắn để đảm bảo thông báo lỗi xuất hiện
    time.sleep(0.5)

    # Điểm xác nhận: Kiểm tra rằng thông báo lỗi xuất hiện khi không nhập mật khẩu
    # Kiểm tra nội dung của `page_source` để xác nhận thông báo lỗi
    page_source = driver.page_source
    assert 'Warning: No match for E-Mail Address and/or Password.' in page_source, \
        "Không hiển thị thông báo lỗi khi không nhập mật khẩu."


def test_login_without_email(driver):
    """Kiểm tra chức năng đăng nhập khi không nhập email."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Bước 1: Tìm trường 'Password' và nhập mật khẩu hợp lệ
    password = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-password'))
    )
    password.clear()
    password.send_keys('123456')  # Nhập mật khẩu hợp lệ

    # Bỏ qua việc nhập email để kiểm tra trường hợp không có email

    # Bước 2: Nhấp vào nút 'Login' để gửi yêu cầu đăng nhập mà không có email
    login_button = driver.find_element(By.CSS_SELECTOR, 'button[type="submit"]')
    login_button.click()

    # Thời gian chờ ngắn để đảm bảo thông báo lỗi xuất hiện
    time.sleep(0.5)

    # Điểm xác nhận: Kiểm tra rằng thông báo lỗi xuất hiện khi không nhập email
    # Kiểm tra nội dung của `page_source` để xác nhận thông báo lỗi
    page_source = driver.page_source
    assert 'Warning: No match for E-Mail Address and/or Password.' in page_source, \
        "Không hiển thị thông báo lỗi khi không nhập email."


def test_login_invalid_email_format(driver):
    """Kiểm tra chức năng đăng nhập với định dạng email không hợp lệ."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Bước 1: Tìm trường 'Email' và 'Password' để chuẩn bị đăng nhập
    email = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-email'))
    )
    password = driver.find_element(By.ID, 'input-password')

    # Bước 2: Xóa mọi dữ liệu hiện có trong trường 'Email' và 'Password'
    email.clear()
    password.clear()

    # Bước 3: Nhập địa chỉ email có định dạng không hợp lệ và mật khẩu hợp lệ
    email.send_keys('namtronghlg0903gmail.com')  # Định dạng email không hợp lệ (thiếu '@')
    password.send_keys('123456')  # Nhập mật khẩu hợp lệ

    # Bước 4: Nhấp vào nút 'Login' để gửi yêu cầu đăng nhập
    login_button = driver.find_element(By.CSS_SELECTOR, 'button[type="submit"]')
    login_button.click()

    # Thời gian chờ ngắn để đảm bảo thông báo lỗi xuất hiện
    time.sleep(0.5)

    # Điểm xác nhận: Kiểm tra rằng thông báo lỗi xuất hiện khi email có định dạng không hợp lệ
    # Kiểm tra nội dung của `page_source` để xác nhận thông báo lỗi
    page_source = driver.page_source
    assert 'Warning: No match for E-Mail Address and/or Password.' in page_source, \
        "Không hiển thị thông báo lỗi khi định dạng email không hợp lệ."


def test_logout_without_login(driver):
    """Kiểm tra chức năng đăng xuất khi người dùng chưa đăng nhập."""

    # Điều hướng trực tiếp đến URL của trang đăng xuất
    driver.get('http://localhost/opencart/upload/index.php?route=account/logout')

    try:
        # Điểm xác nhận: Kiểm tra xem người dùng có được chuyển hướng đến trang 'Account Logout' hoặc trang 'Login' không.
        # Nếu người dùng chưa đăng nhập, trang web có thể chuyển hướng đến trang đăng nhập hoặc trang thông báo đăng xuất.
        assert WebDriverWait(driver, 10).until(
            EC.title_contains("Account Logout") or EC.title_contains("Login")
        ), "Không được chuyển hướng đến trang 'Account Logout' hoặc 'Login'."
    except TimeoutException:
        # Nếu không thể chuyển hướng đến trang đăng xuất hoặc đăng nhập trong thời gian quy định, thông báo lỗi sẽ xuất hiện
        assert False, "Chuyển hướng không thành công đến trang yêu cầu đăng nhập hoặc đăng xuất."


def test_login_response_time(driver):
    """Kiểm tra thời gian phản hồi của chức năng đăng nhập."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Lấy thời gian bắt đầu của quá trình đăng nhập
    start_time = time.time()

    # Bước 1: Tìm trường 'Email' và 'Password' để chuẩn bị đăng nhập
    email = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-email'))
    )
    password = driver.find_element(By.ID, 'input-password')

    # Bước 2: Xóa mọi dữ liệu hiện có trong trường 'Email' và 'Password'
    email.clear()
    password.clear()

    # Bước 3: Nhập thông tin đăng nhập với email và mật khẩu hợp lệ
    email.send_keys('namtronghlg0903@gmail.com')
    password.send_keys('123456')

    # Bước 4: Nhấp vào nút 'Login' để gửi yêu cầu đăng nhập
    login_button = driver.find_element(By.CSS_SELECTOR, 'button[type="submit"]')
    login_button.click()

    # Bước 5: Chờ đến khi chuyển hướng thành công đến trang 'My Account'
    WebDriverWait(driver, 10).until(
        EC.title_contains('My Account')
    )

    # Tính toán thời gian phản hồi sau khi đăng nhập thành công
    response_time = time.time() - start_time

    # Điểm xác nhận: Kiểm tra xem thời gian phản hồi có dưới 6 giây không
    assert response_time < 6, f"Thời gian phản hồi quá lâu: {response_time} giây."

