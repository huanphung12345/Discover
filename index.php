<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hướng Dẫn Sửa Lỗi và Cài Đặt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0 auto;
            max-width: 800px;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        h2 {
            color: #007bff;
        }
        ol, ul {
            margin-top: 10px;
            margin-bottom: 20px;
        }
        ol ol, ul ul {
            margin-top: 5px;
        }
        ol {
            list-style-type: decimal;
            padding-left: 20px;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        li {
            margin-bottom: 5px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Hướng Dẫn Sửa Lỗi và Cài Đặt</h1>

    <ol>
        <li>
            <h2>Thay Đổi Mật Khẩu Administrator:</h2>
            <ul>
                <li>Mở Command Prompt với quyền Administrator.</li>
                <li>Nhập lệnh: Net User Administrator Huan2007 và nhấn Enter.</li>
                <li>Xác nhận mật khẩu mới để đảm bảo an toàn.</li>
            </ul>
        </li>

        <li>
            <h2>Khắc Phục Lỗi Open File Security Warning:</h2>
            <ul>
                <li>Mở menu Start, nhập inetcpl.cpl và nhấn Enter.</li>
                <li>Chọn thẻ Security, nhấp vào Custom Level.</li>
                <li>Tìm mục "Launching applications and unsafe files", chọn Enable.</li>
                <li>Nhấp OK để lưu và kiểm tra kết quả.</li>
            </ul>
        </li>

        <li>
            <h2>Khắc Phục Lỗi Exe Has Stopped Working:</h2>
            <ul>
                <li>Truy cập <a href="https://www.drivereasy.com/knowledge/fixed-exe-has-stopped-working/">https://www.drivereasy.com/knowledge/fixed-exe-has-stopped-working/</a>.</li>
                <li>Đọc và thực hiện hướng dẫn.</li>
            </ul>
        </li>

        <li>
            <h2>Cách Xóa Ứng Dụng Mặc Định Trên Windows:</h2>
            <ul>
                <li>Mở Start Menu, nhập "Windows PowerShell" và chọn Run as administrator.</li>
                <li>Dùng lệnh Get-AppxPackage -AllUsers | Remove-AppxPackage để xóa các ứng dụng mặc định trên Windows 10.</li>
            </ul>
        </li>

        <li>
            <h2>Cách Khắc Phục Lỗi .exe Has Stopped Working:</h2>
            <ul>
                <li>Nhấn tổ hợp phím Windows + R để mở hộp thoại Run.</li>
                <li>Gõ "Regedit" và nhấn OK để mở Registry Editor.</li>
                <li>Tiếp theo, điều hướng đến: HKEY_CLASSES_ROOT\exefile\shell\open\command.</li>
                <li>Trong cửa sổ bên phải, double-click vào "Default" và đặt Value Data là "%1" %*. Nhấp OK.</li>
            </ul>
        </li>

        <li>
            <h2>How to Enabled Local Users and Groups:</h2>
            <ul>
                <li>Nhấn tổ hợp phím Windows + R để mở hộp thoại Run.</li>
                <li>Trong hộp thoại Run, gõ gpedit.msc và nhấn Enter để mở Local Group Policy Editor.</li>
                <li>Trong cửa sổ Local Group Policy Editor, điều hướng đến User Configuration -> Administrative Templates -> Windows Components -> Microsoft Management Console -> Restricted/Permitted snap-ins.</li>
                <li>Trong danh sách các snap-ins bên phải, tìm và chọn mục Restricted/Permitted snap-ins.</li>
                <li>Click đúp vào mục này để mở cài đặt.</li>
                <li>Trong cửa sổ cài đặt Restricted/Permitted snap-ins, chọn tùy chọn Enabled.</li>
                <li>Click Apply và sau đó OK để lưu thay đổi.</li>
            </ul>
        </li>
    </ol>

    <h2>Video Hướng Dẫn:</h2>
    <ul>
        <li>
            <a href="https://www.youtube.com/watch?v=MiQNS4ASTMM">Cách Vô Hiệu Hóa Windows Defender Windows 10,11</a>
        </li>
        <li>
            <a href="https://www.youtube.com/watch?v=6QGDS6nWxOY">Cách Gỡ Microsoft Edge ra khỏi Windows 10,11</a>
        </li>
    </ul>
</body>
</html>
