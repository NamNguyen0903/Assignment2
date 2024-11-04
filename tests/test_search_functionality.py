import pytest
from selenium import webdriver
from selenium.common import TimeoutException
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time

@pytest.fixture(params=["chrome", "firefox"], scope="function")
def driver(request):
    if request.param == "chrome":
        driver = webdriver.Chrome()
    elif request.param == "firefox":
        driver = webdriver.Firefox()
    driver.get('http://localhost/Assignment2/index.php?route=common/home&language=en-gb')
    yield driver
    driver.quit()

def test_search_functionality_with_valid_keyword(driver):
    """Kiểm tra tìm kiếm với từ khóa hợp lệ."""

    # Xác định ô tìm kiếm và nhập từ khóa hợp lệ
    search_box = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.NAME, 'search'))
    )
    search_box.send_keys('Macbook')  # Nhập từ khóa hợp lệ "Macbook"

    # Xác định và nhấn vào nút tìm kiếm
    search_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button.btn.btn-light.btn-lg'))
    )
    search_button.click()

    # Đợi kết quả tìm kiếm xuất hiện
    time.sleep(5)  # Thời gian chờ ngắn để đảm bảo kết quả đã tải xong

    # Kiểm tra sự hiện diện của danh sách sản phẩm
    search_results = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.ID, 'product-list'))
    )

    # Điểm xác nhận: Kiểm tra xem danh sách kết quả tìm kiếm có hiển thị không
    assert search_results.is_displayed(), "Kết quả tìm kiếm không hiển thị với từ khóa hợp lệ."
    print("Test passed: Kết quả tìm kiếm hiển thị với từ khóa hợp lệ.")

def test_search_functionality_with_invalid_keyword(driver):
    """Kiểm tra tìm kiếm với từ khóa không hợp lệ."""

    # Xác định ô tìm kiếm và nhập từ khóa không hợp lệ
    search_box = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.NAME, 'search'))
    )
    search_box.send_keys('abcdefgh')  # Nhập từ khóa không hợp lệ

    # Xác định và nhấn vào nút tìm kiếm
    search_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button.btn.btn-light.btn-lg'))
    )
    search_button.click()

    try:
        # Chờ thông báo "không có sản phẩm nào" xuất hiện
        no_results_message = WebDriverWait(driver, 15).until(
            EC.presence_of_element_located((By.XPATH, "//p[contains(text(), 'There is no product that matches the search criteria')]"))
        )

        # Điểm xác nhận: Kiểm tra xem thông báo có hiển thị đúng không
        assert no_results_message.is_displayed(), "Thông báo không hiển thị với từ khóa không hợp lệ."
        print("Test passed: Thông báo hiển thị khi tìm kiếm với từ khóa không hợp lệ.")

    except TimeoutException:
        # Xử lý ngoại lệ nếu không tìm thấy thông báo trong thời gian cho phép
        print("Test failed: Không tìm thấy thông báo kết quả không thành công.")
        raise

def test_search_functionality_empty_keyword(driver):
    """Kiểm tra chức năng tìm kiếm khi không nhập từ khóa."""

    # Điều hướng đến trang chủ
    driver.get("http://localhost/Assignment2/index.php?route=common/home")

    # Xác định ô tìm kiếm và xóa bất kỳ từ khóa nào đang có trong ô tìm kiếm
    search_box = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.NAME, 'search'))
    )
    search_box.clear()  # Xóa nội dung trong ô tìm kiếm để đảm bảo từ khóa trống

    # Xác định và nhấn vào nút tìm kiếm
    search_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button.btn.btn-light.btn-lg'))
    )
    search_button.click()

    # Chờ và xác minh sự xuất hiện của thông báo "không có sản phẩm nào"
    no_results_message = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located(
            (By.XPATH, "//p[contains(text(), 'There is no product that matches the search criteria')]"))
    )

    # Điểm xác nhận: Xác minh rằng thông báo xuất hiện khi tìm kiếm từ khóa trống
    assert no_results_message.is_displayed(), "Thông báo 'Không có sản phẩm nào' không xuất hiện khi tìm kiếm từ khóa trống."

    # In kết quả kiểm tra nếu thành công
    print("Test passed: Thông báo 'Không có sản phẩm nào' hiển thị khi tìm kiếm với từ khóa trống.")

def test_search_functionality_special_characters(driver):
    """Kiểm tra tính năng tìm kiếm với các ký tự đặc biệt."""

    # Điều hướng đến trang chủ
    driver.get("http://localhost/Assignment2/index.php?route=common/home")

    # Xác định ô tìm kiếm và nhập các ký tự đặc biệt để kiểm tra
    search_box = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.NAME, 'search'))
    )
    search_box.send_keys('@#$%^&*')  # Nhập từ khóa tìm kiếm là các ký tự đặc biệt

    # Xác định và nhấn nút tìm kiếm
    search_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.CSS_SELECTOR, 'button.btn.btn-light.btn-lg'))
    )
    search_button.click()

    # Tìm và kiểm tra thông báo "không có kết quả"
    no_results_text = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.XPATH, "//p[contains(text(), 'There is no product that matches the search criteria')]"))
    )

    # Điểm xác nhận: Xác minh rằng thông báo không có kết quả hiển thị đúng
    assert no_results_text.is_displayed(), "Không hiển thị thông báo khi tìm kiếm sản phẩm với ký tự đặc biệt."

    # Thông báo kết quả kiểm tra thành công
    print("Test passed: Hiển thị thông báo khi tìm kiếm với ký tự đặc biệt.")

