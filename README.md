<h1>Laravel REST API with Sanctum Authorization</h1>

<h3>Public Routes (open for all)</h3>

GET   /api/products
GET   /api/products/:id

POST   /api/login
@body: email, password

POST   /api/register
@body: name, email, password, password_confirmation


<h3>Protected Routes (only for registered & logged in users)</h3>

POST   /api/products
@body: name, slug, description, price

PUT   /api/products/:id
@body: ?name, ?slug, ?description, ?price

DELETE  /api/products/:id

POST    /api/logout
