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
    driver.get('http://localhost/opencart/upload/index.php?route=common/home&language=en-gb')
    yield driver
    driver.quit()


def test_responsive_design_navbar(driver):
    """Kiểm tra tính phản hồi của thanh điều hướng (navbar) trên các kích thước màn hình khác nhau."""

    # Danh sách các kích thước màn hình đại diện cho thiết bị di động, máy tính bảng và máy tính
    sizes = [480, 768, 1024, 1440]

    for size in sizes:
        # Đặt kích thước cửa sổ trình duyệt cho kích thước hiện tại
        driver.set_window_size(size, 800)
        time.sleep(2)  # Chờ để giao diện điều chỉnh theo kích thước mới

        # Tìm thanh điều hướng và kiểm tra xem nó có hiển thị không
        navbar = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.CSS_SELECTOR, '.navbar'))
        )

        # Điểm xác nhận: Xác nhận thanh điều hướng hiển thị đúng ở kích thước hiện tại
        assert navbar.is_displayed(), f"Thanh điều hướng không hiển thị ở kích thước {size}px"

        # Thông báo kết quả kiểm tra cho kích thước hiện tại
        print(f'Navbar test passed for screen width {size}')


def test_responsive_design_footer(driver):
    """Kiểm tra tính phản hồi của phần chân trang (footer) trên các kích thước màn hình khác nhau để đảm bảo hiển thị đúng."""

    # Danh sách kích thước màn hình để kiểm tra tính hiển thị của phần chân trang
    sizes = [480, 768, 1024, 1440]  # Các kích thước phổ biến cho thiết bị di động và máy tính

    for size in sizes:
        # Đặt kích thước cửa sổ trình duyệt cho mỗi lần kiểm tra
        driver.set_window_size(size, 800)
        time.sleep(2)  # Chờ để giao diện thích ứng với kích thước mới

        # Tìm phần tử footer và kiểm tra xem nó có hiển thị không
        footer = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.CSS_SELECTOR, 'footer'))
        )

        # Điểm xác nhận: Kiểm tra phần chân trang có hiển thị đúng hay không
        assert footer.is_displayed(), f"Footer không hiển thị ở kích thước {size}px"

        # Thông báo kết quả kiểm tra thành công cho kích thước hiện tại
        print(f'Footer test passed for screen width {size}')


def test_responsive_design_search_bar(driver):
    """Kiểm tra tính phản hồi của thanh tìm kiếm trên các kích thước màn hình khác nhau để đảm bảo hiển thị đúng."""

    # Danh sách kích thước màn hình khác nhau để kiểm tra thanh tìm kiếm
    sizes = [480, 768, 1024, 1440]  # Gồm các kích thước phổ biến của thiết bị di động và máy tính

    for size in sizes:
        # Đặt kích thước cửa sổ trình duyệt
        driver.set_window_size(size, 800)
        time.sleep(2)  # Chờ để giao diện thích ứng với kích thước mới

        # Tìm thanh tìm kiếm và kiểm tra xem nó có hiển thị không
        search_bar = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.CSS_SELECTOR, 'input[name="search"]'))
        )

        # Điểm xác nhận: Kiểm tra thanh tìm kiếm có hiển thị đúng hay không
        assert search_bar.is_displayed(), f"Search bar không hiển thị ở kích thước {size}px"

        # Thông báo kết quả kiểm tra thành công cho kích thước hiện tại
        print(f'Search bar test passed for screen width {size}')


def test_responsive_design_menu_button(driver):
    """Kiểm tra tính phản hồi của nút menu (hamburger) trên các màn hình nhỏ để đảm bảo hiển thị đúng khi thu nhỏ màn hình."""

    # Danh sách kích thước màn hình nhỏ để kiểm thử nút menu hamburger
    sizes = [480, 768]  # Các kích thước phổ biến của màn hình di động

    for size in sizes:
        # Đặt kích thước cửa sổ trình duyệt
        driver.set_window_size(size, 800)
        time.sleep(2)  # Đợi một chút để giao diện thích ứng với kích thước mới

        # Tìm nút menu hamburger khi hiển thị ở màn hình nhỏ
        menu_button = WebDriverWait(driver, 10).until(
            EC.presence_of_element_located((By.CSS_SELECTOR, '.navbar-toggler'))
        )

        # Điểm xác nhận: Kiểm tra nút menu có hiển thị đúng hay không
        assert menu_button.is_displayed(), f"Nút menu không hiển thị ở kích thước {size}px"

        # Thông báo kiểm tra thành công cho kích thước hiện tại
        print(f'Menu button test passed for screen width {size}')


def test_responsive_design_product_list(driver):
    """Kiểm tra hiển thị danh sách sản phẩm trên các kích thước màn hình khác nhau để đảm bảo tính responsive."""

    # Danh sách các kích thước màn hình cần kiểm thử
    sizes = [800, 1024, 1440]

    for size in sizes:
        # Đặt kích thước cửa sổ trình duyệt
        driver.set_window_size(size, 800)

        # Đợi trang tải với kích thước mới
        WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.TAG_NAME, 'body')))

        try:
            # Tìm danh sách sản phẩm
            product_list = WebDriverWait(driver, 20).until(
                EC.presence_of_element_located((By.CSS_SELECTOR, '.product-thumb'))  # Sử dụng bộ chọn CSS phù hợp
            )

            # Điểm xác nhận: Kiểm tra danh sách sản phẩm có hiển thị đúng không
            assert product_list.is_displayed(), f"Danh sách sản phẩm không hiển thị ở kích thước {size}px."
            print(f"Test passed: Danh sách sản phẩm hiển thị đúng ở kích thước {size}px.")

        except TimeoutException:
            # Nếu không tìm thấy phần tử danh sách sản phẩm trong thời gian quy định, kiểm thử thất bại
            print(f"Test failed: Không tìm thấy phần tử 'product list' ở kích thước {size}px.")

            # Chụp ảnh màn hình tại kích thước gây lỗi để dễ dàng kiểm tra sau này
            driver.save_screenshot(f'screenshot_{size}px.png')
            raise
