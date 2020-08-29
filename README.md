
## E-Commerce API 

This project was built to develop an API that would implement a simple E-commerce website.

## Getting Started

### Installing Dependencies

#### Set up the project locally 
Firs of all, Excute these commans.

```bash
git clone https://github.com/lujaiiin97/E-coomerce.git
install composer
 ```
#### install Dependencies
Once you install the composer, run 
```bash
php artisan passport:install
 ```

Also, you can read the documentaion about Laravel passport in [Laravel passport](https://laravel.com/docs/7.x/passport)

## Database Setup
#### Update .env file

You have to generate a key,
```bash
php artisan key:generate
 ```
  then change the database name to yours database, 
 ```bash
 DB_DATABASE=E-commerce
  ```

Then run this command 
```bash
php artisan migrate
 ```
 To upload the database to your local server.

## Running the server
To run the server, execute:

```bash
php artisan serve
```

## API documentation

### Getting Started

 - Base URL: Currently this application is only hosted locally. The backend is hosted at http://127.0.0.1:8000/



### Endpoints

#### POST /Register
 - General: 
    - This method To register new merchant
    - Returns the status, merchant data, merchant token, and message

 - Sample: ```  http://127.0.0.1:8000/api/register ```
 - Request:
```
{
    "Password": "Lujain123",
    "Email": "lujain_alharbi@gmail.com"
}
```
 - Response:
```
{
    "data": {
        "user": {
            "Password": "$2y$10$QhctO1A4WnNVh7EcdbnRQeaRrzZVXVRnE/ZO1OvJt0BbjSLYvqMx6",
            "Email": "lujain_alharbi@gmail.com",
            "updated_at": "2020-08-28T17:11:07.000000Z",
            "created_at": "2020-08-28T17:11:07.000000Z",
            "id": 2
        },
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNjUxYTg5ZGYxNzgwNjgwNGIxOTFkZWE1ZGJjMmZjOTNjZGRlMjI4YzUzMzQ4N2NiNTI2NGEzZjdiNjY1MGJjZDY3MDcwMDQyZDI3MzdkOWYiLCJpYXQiOjE1OTg2MzQ2NjcsIm5iZiI6MTU5ODYzNDY2NywiZXhwIjoxNjMwMTcwNjY3LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.asSD4Lq8RT6owrkQ2k7V8UVq3Qi0_C-WYk2Ezxb5sXaW_Xj8MfrXf6hWya_3KEfulY1Sr9_u3xw98Wb6kdVjbclgmBBQBMiAhe0GsZb2ZkBRp64GGMDeba4tA9CRVC6zOMznqqoGmGbwC282tFCddSSMqqrruqKwpCMiMirzGgdh8rr9s8gOkzD5sYmkrp_Lb7cqtY7nf_wDrKXd8g9Cq-sUYoF0Qg_KXs3vf1RJfS9kt_i7j_7v072WRAW5x0M0cHAUA1-kvNv6kyxFfCuU_ceHGsjCCNYKYj5PFBRjQNAMaBz493cUvp5cHR4eVxcfd7Q_eEGmTQQcUhsPIltcW3F96mw5zDYReULfs8xpmA_nyahZP2lkMLHW8VuAG7UbV6d_o_aPDdkoIXNdR1kq0CmWaX8Z_oxcoyMZwWVRUJFJAw7iBj6GVoxFT4jq14crkUGAqViKW9z0v2Cl_qIjl5WrRn0ayuO7ZcQDo6CQnXG90GxGhyNfcOo4EQBB-8kNWd-5lSoGsg_p2pVpDP5-VyIFHsaohr3nFCZ1OkwZSXxk2g91Wvl8lwX1kzQrupKtxKvlOWONBGxInuWRV3J2gTSD4QM_fK12M8TJswxqZDCpyHTqd0hy-cky6NMki05iooYhFEUfCRVd6q_LnJ7lmcl8BItQAt2qvJGd_LM3eHc"
    },
    "status": true,
    "message": "You have been registerd successfully."
}
```
#### POST /Login
 - General: 
    - This method to login existing merchant
    - Returns the status, merchant data, merchant token, and message

 - Sample: ```  http://127.0.0.1:8000/api/Login ```
 - Request:
```
{
    "Password": "Lujain123",
    "Email": "lujain_alharbi@gmail.com"
}
```
 - Response:
```
{
    "data": {
        "0": {
            "id": 2,
            "created_at": "2020-08-28T17:11:07.000000Z",
            "updated_at": "2020-08-28T17:11:07.000000Z",
            "Email": "lujain_alharbi@gmail.com",
            "Password": "$2y$10$QhctO1A4WnNVh7EcdbnRQeaRrzZVXVRnE/ZO1OvJt0BbjSLYvqMx6"
        },
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOGFmNGYzMmQ4ZTNkZTMyY2UxZWRiNWNjMDRiZDQ5MTNmYjU1YWI0ZDQ5YjkxMDU2ZGI0ZWI1ZWZjMWFhZDZhOTE3MWRhNmJjYTYyNmNiNmMiLCJpYXQiOjE1OTg2MzQ4NDEsIm5iZiI6MTU5ODYzNDg0MSwiZXhwIjoxNjMwMTcwODQxLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.qOLyic2hlmIDwkw-rqjto1baGqq33OARchlAsL_huA6yhRjPATkLwwFnPwcYTFTCXQ-4lEn6fSZigK04mm6xHKl9sQSHaILRJlcfXJUa81YJoyIsYPmJxgSGLoDW1D_tAaGWJbrxqsXXqKKfBmjjI074aNWiQWiV4K_h0tyBT4wStzxRRGVnmn-7TdRfLzq5_QynZ-6xDtgTo6f2jKq4UTnbQBvMA3Fczw_3nrYnN2_BnrwFzLcyeRFgKjZ-z_351De43T4cIdb6k70lUa0DH3PzFS6AbX6GdztUHIWUBIWNdP8opoyXBRrKJQG0Ysj0jfAG6X42ZYdOxO-X8Jxh7yPpzuaf5O-rCzqMehMC5HK9L0xE5KGCmKhmIivCaVjwHACHbVgDO-5dPDNFoMTcLgBTrqCMDffgixUA0kf8cYEMSqFni7YjouYRuvKseKUGbwgmVhEFNA3WwctKL6WqbU7drwgW5u22hWm5yJBGWZnbDQV0yhE5Ib3jWvMlHb9l8qfChtn13dmR0xB3eEUq11uisDhgs8wzPI5wTeb_SMQBqo6GkFHtOGhflXbimaApn5ytZgyADJnw75GPHIcNM6IB4dd92cNuUKwv42NjtsxW5C3DgnDP19dq-C3JUMzSkf6D5stUrOjgN7-i91Xj_5QI8CYEdSe0Wops6H-zWYE"
    },
    "status": true,
    "message": "Logged in successfully."
}
```
#### POST /create_store
 - General: 
    - Create new store for a speceific merchant
    - Returns the status, store data, and message

 - Sample: ```  http://127.0.0.1:8000/api/create_store ```
 - Request:
```
{ "Name": "Lujain_store",
  "Merchant_id": "2"
        }
 ```
  - Response:
```
{
    "data": {
        "Name": "Lujain_store",
        "Merchant_id": "2",
        "updated_at": "2020-08-28T17:18:59.000000Z",
        "created_at": "2020-08-28T17:18:59.000000Z",
        "id": 4
    },
    "status": true,
    "message": "The store has been created successfully."
}

```
 
 #### POST /Add_product
 - General: 
     - Add new product for a speceific store
    - Returns the status, product data, and message.
 - Sample: ```  http://127.0.0.1:8000/api/Add_product ```
 - Request:
```
{ 
        "Name": "Pink bag",
        "Description": "its a cotton bag",
        "Price": "25",
        "Store_id":4

        }
 ```
  - Response:
```
{

    "data": {
        "Name": "Pink bag",
        "Description": "its a cotton bag",
        "Price": "25",
        "Store_id": 4,
        "updated_at": "2020-08-28T17:34:33.000000Z",
        "created_at": "2020-08-28T17:34:33.000000Z",
        "id": 2
    },
    "status": true,
    "message": "The product has been created successfully."

}

```
 
 #### POST /create_cart
- General:
  - To  create new cart for guests
  - Returns the status, cart data with the user id, and message.
   
 - Sample: ```  http://127.0.0.1:8000/api/create_cart ```

  - Response:
```
{
    "0": {
        "data": {
            "User_id": 9,
            "Total_price": 0,
            "updated_at": "2020-08-29T07:28:46.000000Z",
            "created_at": "2020-08-29T07:28:46.000000Z",
            "id": 9
        },
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjkyM2Q5YmYwYzI4MDc3M2M5M2ExNTIzNzI4MzRmYTAzNzFjZmZjZGE3Yzc1ZDVjMGFkMmFlNjNhOTFiYzM4MzIxYTY5OWFkMWY3NmNjY2IiLCJpYXQiOjE1OTg2ODYxMjYsIm5iZiI6MTU5ODY4NjEyNiwiZXhwIjoxNjMwMjIyMTI2LCJzdWIiOiI5Iiwic2NvcGVzIjpbXX0.p-fU1GOxza6r1zeKAIwxeyiY2S1wMG5uvVvltsuTmqM3xwpLWXmnUoCuxHYyXGOb7NvAdMqljFrraN0HI4cTCs-QJDLLXd0syfDNbkH7vXqsh-teEZhEVsPvdVP9XUNUCN74P5aaJB_86mz3_CYYHaBilO3PDO-fujefksqmEoK_hW90s_Q_medVPCC2v6154qOBDBgag0iPSozy79mJAChYSQ5EV4e4Y_TqHKwn14f00OV4gFvVJr8p2HAUk20StZE49qVI-QayPPOWYDHzx8iSozQBD3ylNmAL9r3oa5q6TdVfFquTJU6c4E_V7_mgyuZbs3mtuBAnA6Su5Rj7zYYbrDt3ZHt_Fe85ZrhhAQxE9dcYKeai12Ljfxw2W6hUnLdCDucPACPMOqtJ6xNYbOjBF5uWSMdRlFfMF7WazqYBUgoU89wgEVT608oAbgPdOPdX1DVyq8J5hxfLuwHiXtn53fsmPFbsykOC65apUz0yStiZ6pw6sPwk72vCEz2k_MyplPtKhYfC7j_Wnf0N5NWNPjuMVNXZ1D5VjF2HqoJOi6jMtxchsgJtmQsPdKjCReHYlW3Hm6IE3G3nopQtLKWQTToW0MprcYOMd-M9ExPnTBB_JE9VQKMTgY3ZKCJQM8MrKeyIQVOvmo2LrDopCC5oASlbxxkrqz9Xtn7S4u0"
    },
    "status": true,
    "message": "The cart has been created successfully."
```
- clarification
 - since the guests aren't registered, i assumed that each cart will 
   be assigned to new guest data to use it in another function. Also, to save the guest data.
  #### POST /Add_to_cart
 - General: 
    - Add new product to specific cart 
    - for each call to this API method, the `total price` will increase as much as there is a products to this cart
 - Sample: ```  http://127.0.0.1:8000/api/Add_to_cart ```
 - Request:
```
{
    "cart_id":6,
    "User_id":1,
    "Product_id":2
}
 ```
  - Response:
```
{
    "data": {
        "id": 6,
        "created_at": "2020-08-28T17:38:20.000000Z",
        "updated_at": "2020-08-28T17:49:28.000000Z",
        "User_id": 6,
        "Total_price": 25
    },
    "status": true,
    "message": "The product has been added to the cart successfully."
}

 ```
 

![](images/ERD.jpg)
