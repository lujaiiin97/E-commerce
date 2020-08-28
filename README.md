
#E-Commerce website API Backend

This project is about a webpage to manage the trivia app and play the game. 
The project's plan was to develop an API and test suite that would implement a few features and functionality.


## Getting Started

## Back-End


### Installing Dependencies
#### composer 3.7

Follow instructions to install the latest version of python for your platform in the [python docs](https://docs.python.org/3/using/unix.html#getting-and-installing-the-latest-version-of-python)


#### Virtual Enviornment

We recommend working within a virtual environment whenever using Python for projects. This keeps your dependencies for each project separate and organaized. Instructions for setting up a virual enviornment for your platform can be found in the [python docs](https://packaging.python.org/guides/installing-using-pip-and-virtual-environments/)

#### PIP Dependencies

Once you have your virtual environment setup and running, install dependencies by naviging to the `/backend` directory and running:

```bash
pip install -r requirements.txt
```

This will install all of the required packages we selected within the `requirements.txt` file.

##### Key Dependencies

- [Flask](http://flask.pocoo.org/)  is a lightweight backend microservices framework. Flask is required to handle requests and responses.

- [SQLAlchemy](https://www.sqlalchemy.org/) is the Python SQL toolkit and ORM we'll use handle the lightweight sqlite database. You'll primarily work in app.py and can reference models.py. 

- [Flask-CORS](https://flask-cors.readthedocs.io/en/latest/#) is the extension we'll use to handle cross origin requests from our frontend server. 

## Database Setup
With Postgres running, restore a database using the trivia.psql file provided. From the backend folder in terminal run:
```bash
psql trivia < trivia.psql
```

## Running the server

From within the `backend` directory first ensure you are working using your created virtual environment.

To run the server, execute:

```bash
export FLASK_APP=flaskr
export FLASK_ENV=development
flask run
```

Setting the `FLASK_ENV` variable to `development` will detect file changes and restart the server automatically.

Setting the `FLASK_APP` variable to `flaskr` directs flask to use the `flaskr` directory and the `__init__.py` file to find the application. 
NOTE: Make sure you create a database named trivia in the PostgreSQL server before running the tests.
API Documentation

## Front-End 
### Installing Dependencies

#### Installing Node and NPM

This project depends on Nodejs and Node Package Manager (NPM). Before continuing, you must download and install Node (the download includes NPM) from [https://nodejs.com/en/download](https://nodejs.org/en/download/).

#### Installing project dependencies

This project uses NPM to manage software dependencies. NPM Relies on the package.json file located in the `frontend` directory of this repository. After cloning, open your terminal and run:

```bash
npm install
```

>_tip_: **npm i** is shorthand for **npm install**


## Running the API


Open [http://localhost:9000](http://localhost:3000) to view it in the browser.
```bash
npm start
```

## API documentation

### Getting Started

 - Base URL: Currently this application is only hosted locally. The backend is hosted at http://127.0.0.1:8000/
 - Authentication: This version does not require authentication or API keys.
 
 ### Error Handling
 
 Errors are returned as JSON in the following format:
 
 ```
 {
    "success": False,
    "error": 404,
    "message": "resource not found"
}

```
The API will return three types of errors:

    400 – bad request
    404 – resource not found
    422 – unprocessable
    405 - method not allowed

### Endpoints

#### POST /Register
 - General: 
    - To register new merchant
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
    - To login existing merchant
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
 - General: 
    - To login existing merchant
 - Sample: ```  http://127.0.0.1:8000/api/register ```
 - Request:
```
{
    "Password": "Lujain123",
    "Email": "lujain_alharbi@gmail.com"
}
```

#### POST /create_store
 - General: 
    - To login existing merchant
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
    - To login existing merchant
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
 
 #### POST /Createcart
 - General: 
    - To login existing merchant
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

  #### POST /Add_to_cart
 - General: 
    - To login existing merchant
 - Sample: ```  http://127.0.0.1:8000/api/create_store ```
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
 

 
# E-commerce
