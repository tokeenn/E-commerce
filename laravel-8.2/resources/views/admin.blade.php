@include ('layouts.default')
<link rel="stylesheet" href="css/styleAdminPage.css">
<form action="update" method="POST" class="form_admin_container">
  @csrf
  <div class="form_admin">
    <label for="title">Enter product title: </label>
    <input type="text" name="title" id="title" required>
  </div>
  <div class="form_admin">
    <label for="description">Enter a description of product: </label>
    <input type="text" name="description" id="description" required>
  </div>
  <div class="form_admin">
    <label for="stock">Set number of article in stock: </label>
    <input type="number" name="stock" id="stock" required>
  </div>
  <div class="form_admin">
    <label for="price">Set price of article: </label>
    <input type="number" name="price" id="price" required>
  </div>
  <div class="form_admin">
    <button type="submit">Submit</button>
  </div>
</form>
