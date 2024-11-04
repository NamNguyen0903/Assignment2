import pytest
import time
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC


@pytest.fixture(params=["chrome", "firefox"], scope="function")
def driver(request):
    if request.param == "chrome":
        driver = webdriver.Chrome()
    elif request.param == "firefox":
        driver = webdriver.Firefox()
    driver.get('http://localhost/Assignment2/index.php?route=common/home&language=en-gb')
    yield driver
    driver.quit()


def test_navigation(driver):
    # Tìm hình ảnh sản phẩm "MacBook" trên trang với thời gian chờ linh hoạt
    macbook_image = WebDriverWait(driver, 15).until(
        EC.presence_of_element_located((By.XPATH, "//img[@alt='MacBook']"))
    )
    assert macbook_image.is_displayed(), "Hình ảnh của MacBook không hiển thị."

    # Cuộn trang xuống để thấy được hình ảnh của "MacBook"
    driver.execute_script("arguments[0].scrollIntoView({block: 'center'});", macbook_image)

    # Đợi hình ảnh có thể nhấp vào và thực hiện nhấp với thời gian chờ linh hoạt
    clickable_macbook = WebDriverWait(driver, 15).until(
        EC.element_to_be_clickable((By.XPATH, "//img[@alt='MacBook']"))
    )
    clickable_macbook.click()

    # Kiểm tra URL có chứa 'product' để xác nhận điều hướng thành công
    WebDriverWait(driver, 30).until(EC.url_contains("product"))
    assert "product" in driver.current_url, \
        f"Không điều hướng đến trang sản phẩm. Current URL: {driver.current_url}"

    # Thông báo URL hiện tại để xác nhận
    print(f"Current URL after click: {driver.current_url}")
def test_navigation_to_product_page(driver): # Điều hướng thành công đến trang chi tiết sản phẩm khi nhấp vào hình ảnh sản phẩm
    macbook_image = WebDriverWait(driver, 15).until(
        EC.presence_of_element_located((By.XPATH, "//img[@alt='MacBook']"))
    )
    assert macbook_image.is_displayed(), "Hình ảnh của MacBook không hiển thị."

    macbook_image.click()

    # Xác nhận điều hướng thành công
    WebDriverWait(driver, 30).until(EC.url_contains("product"))
    assert "product" in driver.current_url, "Không điều hướng đến trang chi tiết sản phẩm."
def test_product_details_displayed(driver): # Kiểm tra nội dung sản phẩm sau khi điều hướng đến trang chi tiết sản phẩm
    macbook_image = WebDriverWait(driver, 15).until(
        EC.presence_of_element_located((By.XPATH, "//img[@alt='MacBook']"))
    )
    macbook_image.click()

    # Xác nhận điều hướng thành công
    WebDriverWait(driver, 30).until(EC.url_contains("product"))

    # Kiểm tra thông tin sản phẩm
    product_name = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.CSS_SELECTOR, "h1"))
    )
    product_price = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.CSS_SELECTOR, ".price-new"))
    )
    product_description = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located((By.ID, "tab-description"))
    )

    assert "MacBook" in product_name.text, "Tên sản phẩm không đúng."
    assert product_price.is_displayed(), "Giá sản phẩm không hiển thị."
    assert product_description.is_displayed(), "Mô tả sản phẩm không hiển thị."
def test_add_to_cart_button(driver): # Kiểm tra nút "Add to Cart" trên trang chi tiết sản phẩm
    macbook_image = WebDriverWait(driver, 15).until(
        EC.presence_of_element_located((By.XPATH, "//img[@alt='MacBook']"))
    )
    macbook_image.click()

    # Xác nhận điều hướng thành công
    WebDriverWait(driver, 30).until(EC.url_contains("product"))

    # Kiểm tra nút "Add to Cart"
    add_to_cart_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable((By.ID, "button-cart"))
    )
    assert add_to_cart_button.is_displayed(), "Nút 'Add to Cart' không hiển thị."
def test_navigation_to_another_product_page(driver): # Điều hướng đến trang sản phẩm khác và xác nhận điều hướng
    iphone_image = WebDriverWait(driver, 15).until(
        EC.presence_of_element_located((By.XPATH, "//img[@alt='iPhone']"))
    )
    assert iphone_image.is_displayed(), "Hình ảnh của iPhone không hiển thị."

    iphone_image.click()

    # Xác nhận điều hướng thành công
    WebDriverWait(driver, 30).until(EC.url_contains("product"))
    assert "product" in driver.current_url, "Không điều hướng đến trang sản phẩm iPhone."
def test_return_to_home_from_product_page(driver):
    # Mở trang sản phẩm bằng cách nhấp vào hình ảnh MacBook
    macbook_image = WebDriverWait(driver, 15).until(
        EC.presence_of_element_located((By.XPATH, "//img[@alt='MacBook']"))
    )
    macbook_image.click()

    # Xác nhận điều hướng thành công
    WebDriverWait(driver, 30).until(EC.url_contains("product"))

    # Thử quay lại trang chủ bằng cách nhấp vào biểu tượng "Home"
    from selenium.common import TimeoutException
    try:
        home_link = WebDriverWait(driver, 10).until(
            EC.element_to_be_clickable((By.XPATH, "//a[i[contains(@class, 'fa-home')]]"))
        )
        home_link.click()

        # Xác nhận quay lại trang chủ
        WebDriverWait(driver, 10).until(EC.url_contains("home"))
        assert "home" in driver.current_url, "Không quay lại trang chủ thành công."
        print(f"Đã quay lại trang chủ thành công: {driver.current_url}")
    except TimeoutException:
        print("Không tìm thấy hoặc không thể nhấp vào liên kết trang chủ.")
        assert False, "Không thể quay lại trang chủ từ trang sản phẩm."
