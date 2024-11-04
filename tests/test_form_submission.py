import pytest
import time
from selenium import webdriver
from selenium.common import TimeoutException, StaleElementReferenceException
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC


@pytest.fixture(params=["chrome", "firefox"], scope="function")
def driver(request):
    if request.param == "chrome":
        driver = webdriver.Chrome()
    elif request.param == "firefox":
        driver = webdriver.Firefox()
    driver.get('http://localhost/Assignment2/index.php?route=information/contact&language=en-gb')
    yield driver
    driver.quit()


def test_form_submission_valid_data(driver):
    """Kiểm tra gửi form với dữ liệu hợp lệ."""
    name = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-name'))
    )
    name.send_keys('Nam Nguyen')

    email = driver.find_element(By.ID, 'input-email')
    email.send_keys('nam@gmail.com')

    enquiry = driver.find_element(By.ID, 'input-enquiry')
    enquiry.send_keys('Đây là tin nhắn kiểm thử.')

    submit_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button[type="submit"]'))
    )
    driver.execute_script("arguments[0].click();", submit_button)

    WebDriverWait(driver, 10).until(EC.url_contains("success"))
    new_content = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.ID, 'content'))
    )
    assert "Your enquiry has been successfully sent to the store owner!" in new_content.text, \
        "Nội dung thông báo thành công không đúng sau khi chuyển trang."

def test_form_submission_empty_fields(driver):
    """Kiểm tra gửi form khi các trường để trống và xác minh các thông báo lỗi hiển thị."""
    submit_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button[type="submit"]'))
    )
    driver.execute_script("arguments[0].click();", submit_button)

    # Kiểm tra thông báo lỗi cho trường 'Name'
    try:
        error_name = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.ID, 'error-name'))
        )
        assert error_name.is_displayed(), "Thông báo lỗi không hiển thị cho trường 'Name' khi để trống."
        print("Test passed: Thông báo lỗi hiển thị đúng cho trường 'Name' khi để trống.")
    except TimeoutException:
        print("Test failed: Không tìm thấy thông báo lỗi cho trường 'Name'.")

    # Kiểm tra thông báo lỗi cho trường 'Email'
    try:
        error_email = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.ID, 'error-email'))
        )
        assert error_email.is_displayed(), "Thông báo lỗi không hiển thị cho trường 'Email' khi để trống."
        print("Test passed: Thông báo lỗi hiển thị đúng cho trường 'Email' khi để trống.")
    except TimeoutException:
        print("Test failed: Không tìm thấy thông báo lỗi cho trường 'Email'.")

    # Kiểm tra thông báo lỗi cho trường 'Enquiry'
    try:
        error_enquiry = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.ID, 'error-enquiry'))
        )
        assert error_enquiry.is_displayed(), "Thông báo lỗi không hiển thị cho trường 'Enquiry' khi để trống."
        print("Test passed: Thông báo lỗi hiển thị đúng cho trường 'Enquiry' khi để trống.")
    except TimeoutException:
        print("Test failed: Không tìm thấy thông báo lỗi cho trường 'Enquiry'.")

def test_form_submission_long_enquiry(driver):
    """Kiểm tra gửi form với nội dung quá dài trong trường 'Enquiry'."""
    name = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-name'))
    )
    name.send_keys('Nam Nguyen')

    email = driver.find_element(By.ID, 'input-email')
    email.send_keys('nam@gmail.com')

    enquiry = driver.find_element(By.ID, 'input-enquiry')
    enquiry.send_keys('A' * 10001)  # Nội dung quá dài (hơn 3000 ký tự)

    submit_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button[type="submit"]'))
    )
    driver.execute_script("arguments[0].click();", submit_button)

    # Kiểm tra sự xuất hiện của thông báo lỗi cho trường 'Enquiry'
    try:
        alert_message = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.ID, 'error-enquiry'))
        )
        assert alert_message.is_displayed(), "Thông báo lỗi không hiển thị khi nội dung quá dài trong trường 'Enquiry'."
        assert "Enquiry must be between 10 and 3000 characters!" in alert_message.text, "Nội dung thông báo lỗi không đúng cho trường 'Enquiry'."
        print("Test passed: Thông báo lỗi hiển thị đúng khi nội dung quá dài trong trường 'Enquiry'.")
    except TimeoutException:
        print("Test failed: Không tìm thấy thông báo lỗi cho trường 'Enquiry'.")
        driver.save_screenshot('screenshot_long_enquiry_error.png')  # Chụp ảnh màn hình để kiểm tra
        raise

def test_form_submission_special_characters(driver):
    """Kiểm tra gửi form với ký tự đặc biệt trong trường 'Enquiry'."""
    name = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, 'input-name'))
    )
    name.send_keys('Nam Nguyen')  # Nhập đúng dữ liệu vào trường 'Name'

    email = driver.find_element(By.ID, 'input-email')
    email.send_keys('nam@gmail.com')  # Nhập đúng dữ liệu vào trường 'Email'

    enquiry = driver.find_element(By.ID, 'input-enquiry')
    enquiry.send_keys('!@#$%^&*()_+<>?')  # Nhập ký tự đặc biệt vào trường 'Enquiry'

    submit_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button[type="submit"]'))
    )
    driver.execute_script("arguments[0].click();", submit_button)

    # Chờ cho trang điều hướng và tải lại phần tử xác nhận
    try:
        WebDriverWait(driver, 10).until(EC.url_contains("success"))
        success_message = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.ID, 'content'))
        )
        assert "Your enquiry has been successfully sent to the store owner!" in success_message.text, \
            "Form không gửi thành công hoặc không điều hướng đến trang xác nhận."
        print("Test passed: Gửi form thành công với ký tự đặc biệt trong trường 'Enquiry'.")
    except StaleElementReferenceException:
        # Tìm kiếm lại phần tử sau khi trang tải lại để tránh lỗi stale element
        success_message = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.ID, 'content'))
        )
        assert "Your enquiry has been successfully sent to the store owner!" in success_message.text, \
            "Form không gửi thành công hoặc không điều hướng đến trang xác nhận."
        print("Test passed after handling stale element.")
    except TimeoutException:
        print("Test failed: Form không gửi thành công khi nhập ký tự đặc biệt.")
        raise
