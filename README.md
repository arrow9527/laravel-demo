# Laravel Demo CI/CD
在Google Cloud Plantform 上建置API Server 並建置CI/CD ，開發語⾔要以Laravel 並搭配 Docker 部署。
此專案最初放在 GitLab 上，為統一管理搬至 GitHub 上。

## 開始

這些說明將指導您在本地機器上設置和運行此專案的副本。請參閱下面的說明，了解如何設置開發環境。

### 系統要求

列出此專案所需的軟件和庫的最低版本。

- PHP 版本 8.3.7 或更高
- Composer
- Docker 版本 26.1.1 或更高


### 安裝

1. 複製存儲庫：

    ```bash
    git clone git@github.com:arrow9527/laravel-demo.git
    ```

2. 進入專案目錄並安裝 Composer 依賴項：

    ```bash
    cd laravel-demo
    git checkout -b develop
    composer install
    ```

3. 複製 `.env.example` 檔案並命名為 `.env`：

    ```bash
    cp .env.example .env
    ```

4. 生成應用程序金鑰：

    ```bash
    php artisan key:generate
    ```

5. 配置 `.env` 檔案中的數據庫設置和其他應用程序設置。

    此專案為 Demo 專案，故無需配置 DB 等。基本資料存讀將使用預設之 SQLite。

6. 運行數據庫遷移：

    ```bash
    php artisan make:session-table
    php artisan migrate
    ```

### 本地開發

在本地開發期間，您可以使用以下命令運行內置 PHP 開發服務器：

```bash
php artisan serve
```

### CI/CD
使用GitLab CI/CD來進行持續整合和持續部署。設定檔在專案根目錄中 `.gitlab-ci.yml` 文件
CI/CD流程會自動觸發，並在每次推送和合併請求時運行。
