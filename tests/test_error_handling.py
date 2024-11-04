import pytest
from selenium import webdriver
from selenium.common.exceptions import TimeoutException
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time

@pytest.fixture(params=["chrome", "firefox"], scope="function")
def driver(request):
    """Fixture để khởi động trình duyệt."""
    if request.param == "chrome":
        driver = webdriver.Chrome()
    elif request.param == "firefox":
        driver = webdriver.Firefox()

    yield driver
    driver.quit()

def reset_form(driver, url):
    """Hàm để reset lại trang."""
    driver.get(url)
    time.sleep(2)  # Đảm bảo trang tải hoàn toàn

def test_checkout_from_homepage_with_empty_cart(driver):
    """Kiểm tra hành vi khi người dùng truy cập trang thanh toán từ trang chủ mà không có sản phẩm trong giỏ hàng."""
    reset_form(driver, 'http://localhost/Assignment2/index.php?route=common/home')

    # Nhấn vào nút "Checkout" từ trang chủ
    checkout_button = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.LINK_TEXT, 'Checkout'))
    )
    checkout_button.click()

    # Kiểm tra nội dung trang giỏ hàng
    try:
        cart_message = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.CSS_SELECTOR, 'div#content p'))
        )
        assert cart_message.is_displayed(), "Không hiển thị thông báo 'Your shopping cart is empty!' khi giỏ hàng trống."
        assert cart_message.text == "Your shopping cart is empty!", "Thông báo không chính xác khi giỏ hàng trống."
    except TimeoutException:
        raise AssertionError("Không hiển thị thông báo 'Your shopping cart is empty!' khi giỏ hàng trống.")

def test_registration_invalid_email_format(driver):
    """Kiểm tra đăng ký với email sai định dạng."""
    reset_form(driver, 'http://localhost/Assignment2/index.php?route=account/register&language=en-gb')

    # Điền thông tin vào các trường bắt buộc với email sai định dạng
    driver.find_element(By.ID, 'input-firstname').send_keys('1234')  # First name không hợp lệ
    driver.find_element(By.ID, 'input-lastname').send_keys('67890')  # Last name không hợp lệ
    email_field = driver.find_element(By.ID, 'input-email')
    email_field.send_keys('invalid-email')  # Email sai định dạng
    driver.find_element(By.ID, 'input-password').send_keys('validpassword')

    # Chọn hộp kiểm đồng ý với chính sách bảo mật bằng JavaScript
    privacy_policy_checkbox = driver.find_element(By.NAME, 'agree')
    driver.execute_script("arguments[0].click();", privacy_policy_checkbox)

    # Kiểm tra tính hợp lệ của trường email
    assert email_field.get_attribute("value") == "invalid-email", "Email field value không như mong đợi."
    assert not driver.execute_script("return arguments[0].checkValidity();", email_field), \
        "Trường email không bị đánh dấu là không hợp lệ khi nhập sai định dạng."

    print("Test passed: Trường email không hợp lệ khi nhập sai định dạng.")

def test_incomplete_payment_information(driver):
    """Kiểm tra thông báo lỗi khi nhấn 'Continue' mà không điền bất kỳ thông tin nào trong form địa chỉ giao hàng."""

    # Xóa tất cả cookie trước khi bắt đầu thử nghiệm


    # Thông tin đăng nhập
    username = "namtronghlg0903@gmail.com"  # Thay thế bằng tên đăng nhập thực tế
    password = "123456"  # Thay thế bằng mật khẩu thực tế

    # Bước 1: Đăng nhập vào hệ thống
    driver.get('http://localhost/Assignment2/index.php?route=account/login&language=en-gb')

    # Nhập tên người dùng và mật khẩu
    WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-email'))
    ).send_keys(username)
    WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-password'))
    ).send_keys(password)

    # Nhấn nút đăng nhập
    login_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button[type="submit"]'))
    )
    login_button.click()

    # Kiểm tra xem đăng nhập có thành công không
    try:
        WebDriverWait(driver, 10).until(
            EC.presence_of_element_located((By.LINK_TEXT, 'My Account'))
        )
        print("Đăng nhập thành công.")
    except TimeoutException:
        raise AssertionError("Đăng nhập thất bại. Vui lòng kiểm tra thông tin tài khoản.")

    # Bước 2: Điều hướng đến trang sản phẩm và thêm vào giỏ hàng
    driver.get('http://localhost/Assignment2/index.php?route=product/product&product_id=40')

    # Thêm sản phẩm vào giỏ hàng
    add_to_cart_button = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.ID, 'button-cart'))
    )
    add_to_cart_button.click()

    # Xác nhận sản phẩm đã được thêm vào giỏ hàng
    time.sleep(2)  # Đợi thông báo hiển thị

    # Bước 3: Điều hướng đến trang thanh toán
    driver.get('http://localhost/Assignment2/index.php?route=checkout/checkout')

    # Chọn "Sử dụng một địa chỉ giao hàng mới"
    new_address_radio = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.ID, 'input-shipping-new'))
    )
    new_address_radio.click()

    # Không nhập gì vào các trường địa chỉ giao hàng và nhấn "Continue"
    shipping_continue_button = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.ID, 'button-shipping-address'))
    )

    # Cuộn đến nút "Continue" và nhấn
    driver.execute_script("arguments[0].scrollIntoView();", shipping_continue_button)
    time.sleep(1)  # Thời gian chờ để đảm bảo nút nằm trong tầm nhìn
    try:
        shipping_continue_button.click()
    except:
        driver.execute_script("arguments[0].click();", shipping_continue_button)

    # Kiểm tra các thông báo lỗi dưới các trường bắt buộc
    required_fields = {
        'First Name': 'error-shipping-firstname',
        'Last Name': 'error-shipping-lastname',
        'Address 1': 'error-shipping-address-1',
        'City': 'error-shipping-city',
    }

    for field, error_id in required_fields.items():
        try:
            error_message = WebDriverWait(driver, 10).until(
                EC.visibility_of_element_located((By.ID, error_id))
            )
            assert error_message.is_displayed(), f"Không hiển thị thông báo lỗi cho trường '{field}'."
            print(f"Thông báo lỗi cho trường '{field}': {error_message.text}")
        except TimeoutException:
            raise AssertionError(f"Không hiển thị thông báo lỗi cho trường '{field}'.")

    print("Tất cả các thông báo lỗi cho các trường bắt buộc đã hiển thị chính xác.")

def test_add_zero_quantity_to_cart(driver):
    """Kiểm tra phản hồi của hệ thống khi thêm sản phẩm vào giỏ hàng với số lượng bằng 0."""
    reset_form(driver, 'http://localhost/Assignment2/index.php?route=product/product&product_id=40')

    # Nhập số lượng bằng 0
    quantity_input = WebDriverWait(driver, 20).until(
        EC.visibility_of_element_located((By.ID, 'input-quantity'))
    )
    quantity_input.clear()
    quantity_input.send_keys('0')

    # Nhấn nút "Add to Cart"
    add_to_cart_button = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.ID, 'button-cart'))
    )
    add_to_cart_button.click()

    # Chờ một khoảng thời gian để đảm bảo thông báo lỗi có thời gian hiển thị
    time.sleep(2)

    # Kiểm tra thông báo lỗi trong `page_source`
    page_source = driver.page_source
    if "Warning: Please enter a valid quantity!" in page_source:
        print("Thông báo lỗi hiển thị đúng khi số lượng sản phẩm là 0.")
    else:
        raise AssertionError("Không hiển thị thông báo lỗi khi số lượng sản phẩm là 0.")

def test_apply_coupon(driver):
    """Kiểm tra áp dụng mã giảm giá và xác nhận thông báo thành công."""

    # Xóa tất cả cookie trước khi bắt đầu thử nghiệm
    driver.delete_all_cookies()

    # Thông tin đăng nhập
    username = "namtronghlg0903@gmail.com"  # Thay đổi với tên người dùng thực tế
    password = "123456"  # Thay đổi với mật khẩu thực tế

    # Bước 1: Đăng nhập vào hệ thống
    driver.get('http://localhost/Assignment2/index.php?route=account/login&language=en-gb')

    # Nhập tên người dùng và mật khẩu
    WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-email'))
    ).send_keys(username)
    WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-password'))
    ).send_keys(password)

    login_button = driver.find_element(By.CSS_SELECTOR, 'button[type="submit"]')
    login_button.click()

    # Kiểm tra xem đăng nhập có thành công hay không
    try:
        WebDriverWait(driver, 10).until(
            EC.presence_of_element_located((By.LINK_TEXT, 'My Account'))
        )
        print("Đăng nhập thành công.")
    except TimeoutException:
        raise AssertionError("Đăng nhập thất bại. Vui lòng kiểm tra thông tin tài khoản.")

    # Bước 2: Điều hướng đến trang chủ
    reset_form(driver, 'http://localhost/Assignment2/index.php?route=common/home&language=en-gb')

    # Tìm và tìm kiếm sản phẩm iPhone
    search_box = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.NAME, 'search'))
    )
    search_box.send_keys('iphone')
    search_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button.btn.btn-light.btn-lg'))
    )
    search_button.click()

    # Bước 3: Chọn sản phẩm iPhone đầu tiên trong kết quả và thêm vào giỏ hàng
    first_product = WebDriverWait(driver, 20).until(
        EC.visibility_of_element_located((By.CSS_SELECTOR, 'div.product-thumb h4 a'))
    )

    # Cuộn đến sản phẩm và nhấp
    driver.execute_script("arguments[0].scrollIntoView();", first_product)
    time.sleep(1)  # Thời gian chờ để đảm bảo phần tử hoàn toàn hiển thị
    driver.execute_script("arguments[0].click();", first_product)

    # Bấm nút "Add to Cart" để thêm sản phẩm vào giỏ hàng
    add_to_cart_button = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.ID, 'button-cart'))
    )
    add_to_cart_button.click()

    # Bước 4: Điều hướng đến giỏ hàng và mở phần nhập mã giảm giá
    driver.get('http://localhost/Assignment2/index.php?route=checkout/cart&language=en-gb')

    # Cuộn đến và nhấp vào "Use Coupon Code"
    use_coupon_button = WebDriverWait(driver, 20).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button.accordion-button[data-bs-target="#collapse-coupon"]'))
    )
    driver.execute_script("arguments[0].scrollIntoView();", use_coupon_button)
    time.sleep(1)  # Thời gian chờ để đảm bảo phần tử đã cuộn vào tầm nhìn
    driver.execute_script("arguments[0].click();", use_coupon_button)

    # Cuộn đến phần tử và thực hiện nhập mã giảm giá "2222"
    coupon_input = WebDriverWait(driver, 20).until(
        EC.visibility_of_element_located((By.ID, 'input-coupon'))
    )

    # Cuộn đến phần tử và sau đó gọi `clear()` và `send_keys()`
    driver.execute_script("arguments[0].scrollIntoView();", coupon_input)
    time.sleep(1)  # Thời gian chờ để đảm bảo phần tử đã vào tầm nhìn
    coupon_input.clear()
    coupon_input.send_keys('2222')

    apply_coupon_button = driver.find_element(By.CSS_SELECTOR, '#form-coupon button[type="submit"]')
    try:
        apply_coupon_button.click()
    except:
        driver.execute_script("arguments[0].click();", apply_coupon_button)

    # Bước 5: Chờ thông báo thành công hoặc lỗi xuất hiện và kiểm tra
    try:
        # Chờ đến khi thông báo thành công hoặc lỗi xuất hiện
        WebDriverWait(driver, 15).until(
            EC.presence_of_element_located((By.CSS_SELECTOR, 'div.alert-dismissible'))
        )
        # Kiểm tra `page_source` cho thông báo
        page_source = driver.page_source
        if 'Success: Your coupon discount has been applied!' in page_source:
            print("Thông báo thành công hiển thị đúng.")
        elif 'Warning: Coupon is invalid!' in page_source:
            raise AssertionError("Thông báo lỗi: Mã giảm giá không hợp lệ.")
        else:
            raise AssertionError("Không hiển thị thông báo thành công hoặc lỗi khi áp dụng mã giảm giá.")
    except TimeoutException:
        raise AssertionError("Không có thông báo nào xuất hiện khi áp dụng mã giảm giá.")
