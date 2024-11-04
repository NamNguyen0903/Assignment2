 Assignment2

## Giới thiệu
Assignment2 là một dự án gồm các file và script để thiết lập và kiểm thử hệ thống với Opencart, bao gồm cả việc cấu hình cơ sở dữ liệu và chạy các bài test tự động. Dự án này được chia thành hai nhánh: `main` và `master`, với các nội dung và mục đích khác nhau.

## Cài đặt và Cấu hình

### Bước 1: Tải về mã nguồn từ nhánh `master`
1. Download tất cả các file từ nhánh `master` trong repository `Assignment2` trên GitHub.
2. Sau khi tải về, đổi tên thư mục chứa mã nguồn thành `Assignment2`.
3. Chuyển thư mục `Assignment2` vào thư mục `htdocs` của XAMPP để có thể truy cập từ trình duyệt tại `http://localhost/Assignment2`.

### Bước 2: Cấu hình cơ sở dữ liệu
1. Mở MySQL thông qua XAMPP (truy cập phpMyAdmin tại `http://localhost/phpmyadmin`).
2. Tạo một cơ sở dữ liệu mới có tên là `opencart`.
3. Import file `opencart.sql` từ thư mục `Assignment2` vừa tải về vào cơ sở dữ liệu `opencart`. File `opencart.sql` chứa cấu trúc và dữ liệu mẫu cần thiết cho ứng dụng.

## Chạy các bài test tự động

### Bước 1: Tải về mã nguồn từ nhánh `main`
1. Download tất cả các file từ nhánh `main` trong repository `Assignment2` trên GitHub.
2. Sau khi tải về, truy cập vào thư mục `tests` trong `Assignment2` để kiểm tra các file test.

### Bước 2: Cài đặt các thư viện cần thiết
1. Đảm bảo bạn đã cài đặt `pytest` và plugin `pytest-xdist` để hỗ trợ chạy test song song. Cài đặt chúng bằng lệnh sau:

   ```bash
   pip install pytest pytest-xdist
   

2. Để tạo báo cáo test dưới dạng HTML, cài đặt thêm plugin `pytest-html`:

   ```bash
   pip install pytest-html
   ```

### Bước 3: Chạy các file test
- Để chạy từng file test riêng lẻ, sử dụng lệnh sau trong Terminal hoặc Command Prompt. Di chuyển đến thư mục gốc `Assignment2` và chạy lệnh:

   ```bash
   pytest tests/tên_file_test.py
   ```

   Thay `tên_file_test.py` bằng tên của file test mà bạn muốn chạy. Ví dụ:

   ```bash
   pytest tests/test_data_validation.py
   ```

- Để chạy tất cả các bài test song song (2 luồng), sử dụng lệnh:

   ```bash
   pytest -n 2
   ```

- Để chạy tất cả các bài test và tạo báo cáo HTML, sử dụng lệnh sau:

   ```bash
   pytest --html=report.html
   ```

   Lệnh này sẽ tạo ra một file báo cáo tên là `report.html` trong thư mục hiện tại. Bạn có thể mở file này trong trình duyệt để xem kết quả chi tiết của các bài test.

- Để chạy các bài test song song và tạo báo cáo HTML cùng lúc, sử dụng lệnh:

   ```bash
   pytest -n 2 --html=report.html
   ```

   Lệnh này sẽ chạy các bài test song song (2 luồng) và tạo báo cáo HTML.

### Lưu ý
- Nhánh `master` chứa mã nguồn chính và cấu hình cơ sở dữ liệu.
- Nhánh `main` chứa các file test để kiểm thử chức năng của hệ thống.
- Đảm bảo XAMPP đang chạy Apache và MySQL trước khi truy cập ứng dụng và cơ sở dữ liệu.

## Liên hệ
Nếu có bất kỳ thắc mắc nào về dự án, vui lòng liên hệ qua email: namtronghlg0903@gmail.com
```
