<h1>Laravel REST API with Sanctum Authorization</h1>

<h3>Public Routes (open for all)</h3>

GET   /api/products
GET   /api/products/id

POST   /api/login

POST   /api/register


<h3>Protected Routes (only for registered & logged in users)</h3>

POST   /api/products

PUT   /api/products/id

DELETE  /api/products/id

POST    /api/logout
