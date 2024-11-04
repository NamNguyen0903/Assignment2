import pytest
from selenium import webdriver
from selenium.common import TimeoutException
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

@pytest.fixture(params=["chrome", "firefox"], scope="function")
def driver(request):
    """Fixture để khởi động trình duyệt."""
    if request.param == "chrome":
        driver = webdriver.Chrome()
    elif request.param == "firefox":
        driver = webdriver.Firefox()

    # Mở trang web trước khi bắt đầu các bài kiểm tra
    driver.get('http://localhost/opencart/upload/index.php?route=information/contact&language=en-gb')
    yield driver
    driver.quit()

def reset_form(driver):
    """Hàm để reset lại form bằng cách làm mới trang."""
    driver.get('http://localhost/opencart/upload/index.php?route=information/contact&language=en-gb')


def test_name_field_numeric_input(driver):
    """Kiểm tra form được gửi với dữ liệu không hợp lệ trong trường 'Name'."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Bước 1: Tìm trường 'Name' và nhập dữ liệu không hợp lệ (chỉ số)
    name = WebDriverWait(driver, 20).until(
        EC.visibility_of_element_located((By.ID, 'input-name'))
    )
    name.clear()
    name.send_keys('12345')  # Nhập dữ liệu không hợp lệ vào trường 'Name'

    # Bước 2: Tìm và nhập email hợp lệ vào trường 'Email'
    email = driver.find_element(By.ID, 'input-email')
    email.clear()
    email.send_keys('namtronghlg03@gmail.com')

    # Bước 3: Tìm và nhập tin nhắn hợp lệ vào trường 'Enquiry'
    enquiry = driver.find_element(By.ID, 'input-enquiry')
    enquiry.clear()
    enquiry.send_keys('Đây là một tin nhắn kiểm thử hợp lệ.')

    # Bước 4: Tìm và nhấp vào nút 'Submit' để gửi form
    submit_button = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button[type="submit"]'))
    )
    driver.execute_script("arguments[0].click();", submit_button)

    # Điểm xác nhận: Kiểm tra rằng form không được gửi thành công với dữ liệu không hợp lệ
    # Bằng cách xác minh rằng không có thông báo thành công hiển thị
    success_message = WebDriverWait(driver, 10).until_not(
        EC.visibility_of_element_located((By.CSS_SELECTOR, 'div#content p'))
    )
    assert not success_message, "Form không nên được gửi thành công khi trường 'Name' chứa dữ liệu không hợp lệ."

def test_email_invalid_format(driver):
    """Kiểm tra form với email sai định dạng."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Bước 1: Tìm trường 'Name' và nhập dữ liệu hợp lệ
    name = WebDriverWait(driver, 20).until(
        EC.visibility_of_element_located((By.ID, 'input-name'))
    )
    name.clear()
    name.send_keys('Nam Nguyen')  # Nhập tên hợp lệ

    # Bước 2: Tìm trường 'Email' và nhập địa chỉ email sai định dạng
    email = driver.find_element(By.ID, 'input-email')
    email.clear()
    email.send_keys('namgmail.com')  # Nhập email không chứa '@' và thiếu phần domain

    # Bước 3: Tìm trường 'Enquiry' và nhập tin nhắn hợp lệ
    enquiry = driver.find_element(By.ID, 'input-enquiry')
    enquiry.clear()
    enquiry.send_keys('Đây là một tin nhắn kiểm thử hợp lệ.')

    # Bước 4: Tìm và nhấp vào nút 'Submit' để gửi form
    submit_button = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button[type="submit"]'))
    )
    driver.execute_script("arguments[0].click();", submit_button)

    # Điểm xác nhận: Kiểm tra rằng thông báo lỗi hiển thị khi email sai định dạng
    # Tìm phần tử chứa thông báo lỗi và xác nhận rằng thông báo được hiển thị
    error_message = WebDriverWait(driver, 20).until(
        EC.visibility_of_element_located((By.ID, 'error-email'))
    )
    assert error_message.is_displayed(), "Thông báo lỗi không hiển thị khi email sai định dạng."
    assert "E-Mail Address does not appear to be valid!" in error_message.text, "Thông báo lỗi không chính xác."

def test_enquiry_field_invalid_length(driver):
    """Kiểm tra trường 'Enquiry' khi nhập nội dung quá ngắn."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Bước 1: Tìm trường 'Name' và nhập dữ liệu hợp lệ
    name = WebDriverWait(driver, 20).until(
        EC.visibility_of_element_located((By.ID, 'input-name'))
    )
    name.clear()
    name.send_keys('Nam Nguyen')  # Nhập tên hợp lệ

    # Bước 2: Tìm trường 'Email' và nhập địa chỉ email hợp lệ
    email = driver.find_element(By.ID, 'input-email')
    email.clear()
    email.send_keys('namtrong@gmail.com')  # Nhập email hợp lệ

    # Bước 3: Tìm trường 'Enquiry' và nhập nội dung quá ngắn (không đạt yêu cầu tối thiểu)
    enquiry = driver.find_element(By.ID, 'input-enquiry')
    enquiry.clear()
    enquiry.send_keys('Short')  # Nội dung chỉ có 5 ký tự, không đạt yêu cầu tối thiểu

    # Bước 4: Tìm và nhấp vào nút 'Submit' để gửi form
    submit_button = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button[type="submit"]'))
    )
    driver.execute_script("arguments[0].click();", submit_button)

    # Điểm xác nhận: Kiểm tra rằng thông báo lỗi hiển thị khi nội dung 'Enquiry' quá ngắn
    # Tìm phần tử chứa thông báo lỗi và xác nhận rằng thông báo được hiển thị
    alert_message = WebDriverWait(driver, 20).until(
        EC.visibility_of_element_located((By.ID, 'error-enquiry'))
    )
    assert alert_message.is_displayed(), "Thông báo lỗi không hiển thị khi nội dung quá ngắn."
    assert "Enquiry must be between 10 and 3000 characters!" in alert_message.text, "Thông báo lỗi không chính xác."

def test_email_field_special_characters(driver):
    """Kiểm tra trường 'Email' khi nhập ký tự đặc biệt."""

    # Đặt lại trang về trạng thái ban đầu
    reset_form(driver)

    # Bước 1: Tìm trường 'Name' và nhập dữ liệu hợp lệ
    name = WebDriverWait(driver, 20).until(
        EC.visibility_of_element_located((By.ID, 'input-name'))
    )
    name.clear()
    name.send_keys('Nam Nguyen')  # Nhập tên hợp lệ

    # Bước 2: Tìm trường 'Email' và nhập địa chỉ email có ký tự đặc biệt không hợp lệ
    email = driver.find_element(By.ID, 'input-email')
    email.clear()
    email.send_keys('nam@mail@gamil.com')  # Địa chỉ email không hợp lệ (hai ký tự '@')

    # Bước 3: Tìm trường 'Enquiry' và nhập nội dung hợp lệ
    enquiry = driver.find_element(By.ID, 'input-enquiry')
    enquiry.clear()
    enquiry.send_keys('Đây là một tin nhắn kiểm thử hợp lệ.')

    # Bước 4: Tìm và nhấp vào nút 'Submit' để gửi form
    submit_button = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button[type="submit"]'))
    )
    driver.execute_script("arguments[0].click();", submit_button)

    # Điểm xác nhận: Kiểm tra rằng thông báo lỗi hiển thị khi trường 'Email' có ký tự đặc biệt không hợp lệ
    # Tìm phần tử chứa thông báo lỗi và xác nhận rằng thông báo được hiển thị
    alert_message = WebDriverWait(driver, 20).until(
        EC.visibility_of_element_located((By.ID, 'error-email'))
    )
    assert alert_message.is_displayed(), "Thông báo lỗi không hiển thị khi nhập ký tự đặc biệt vào trường 'Email'."
    assert "E-Mail Address does not appear to be valid!" in alert_message.text, "Thông báo lỗi không chính xác."
