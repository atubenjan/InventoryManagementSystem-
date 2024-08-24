<?php include('header.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="your_product_action_page.php" enctype="multipart/form-data">
                                <!-- Product Information -->
                                <div class="form-group">
                                    <label for="storeSelect">Store</label>
                                    <select class="form-control" id="storeSelect" name="store" required>
                                        <option value="" disabled selected>Select Store</option>
                                        <option value="Store1">Store 1</option>
                                        <option value="Store2">Store 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="warehouseSelect">Warehouse</label>
                                    <select class="form-control" id="warehouseSelect" name="warehouse" required>
                                        <option value="" disabled selected>Select Warehouse</option>
                                        <option value="Warehouse1">Warehouse 1</option>
                                        <option value="Warehouse2">Warehouse 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter Product Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug" required>
                                </div>
                                <div class="form-group">
                                    <label for="sku">SKU</label>
                                    <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter SKU" required>
                                </div>
                                <div class="form-group">
                                    <label for="categorySelect">Category</label>
                                    <select class="form-control" id="categorySelect" name="category" required>
                                        <option value="" disabled selected>Select Category</option>
                                        <option value="Category1">Category 1</option>
                                        <option value="Category2">Category 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="subCategorySelect">Sub Category</label>
                                    <select class="form-control" id="subCategorySelect" name="subCategory">
                                        <option value="" disabled selected>Select Sub Category</option>
                                        <option value="SubCategory1">Sub Category 1</option>
                                        <option value="SubCategory2">Sub Category 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="subSubCategorySelect">Sub Sub Category</label>
                                    <select class="form-control" id="subSubCategorySelect" name="subSubCategory">
                                        <option value="" disabled selected>Select Sub Sub Category</option>
                                        <option value="SubSubCategory1">Sub Sub Category 1</option>
                                        <option value="SubSubCategory2">Sub Sub Category 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="brandSelect">Brand</label>
                                    <select class="form-control" id="brandSelect" name="brand" required>
                                        <option value="" disabled selected>Select Brand</option>
                                        <option value="Brand1">Brand 1</option>
                                        <option value="Brand2">Brand 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="unitSelect">Unit</label>
                                    <select class="form-control" id="unitSelect" name="unit" required>
                                        <option value="" disabled selected>Select Unit</option>
                                        <option value="Unit1">Unit 1</option>
                                        <option value="Unit2">Unit 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sellingTypeSelect">Selling Type</label>
                                    <select class="form-control" id="sellingTypeSelect" name="sellingType" required>
                                        <option value="" disabled selected>Select Selling Type</option>
                                        <option value="Type1">Type 1</option>
                                        <option value="Type2">Type 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="barcodeSymbology">Barcode Symbology</label>
                                    <input type="text" class="form-control" id="barcodeSymbology" name="barcodeSymbology" placeholder="Enter Barcode Symbology">
                                </div>
                                <div class="form-group">
                                    <label for="itemCode">Item Code</label>
                                    <input type="text" class="form-control" id="itemCode" name="itemCode" placeholder="Enter Item Code" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description (Maximum 60 Characters)" maxlength="60"></textarea>
                                </div>

                                <!-- Pricing & Stocks -->
                                <div class="form-group">
                                    <label for="productTypeSelect">Product Type</label>
                                    <select class="form-control" id="productTypeSelect" name="productType" required>
                                        <option value="" disabled selected>Select Product Type</option>
                                        <option value="Type1">Type 1</option>
                                        <option value="Type2">Type 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="taxTypeSelect">Tax Type</label>
                                    <select class="form-control" id="taxTypeSelect" name="taxType" required>
                                        <option value="" disabled selected>Select Tax Type</option>
                                        <option value="Tax1">Tax 1</option>
                                        <option value="Tax2">Tax 2</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="discountTypeSelect">Discount Type</label>
                                    <select class="form-control" id="discountTypeSelect" name="discountType">
                                        <option value="" disabled selected>Select Discount Type</option>
                                        <option value="Percentage">Percentage</option>
                                        <option value="Fixed Amount">Fixed Amount</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="discountValue">Discount Value</label>
                                    <input type="text" class="form-control" id="discountValue" name="discountValue" placeholder="Enter Discount Value">
                                </div>
                                <div class="form-group">
                                    <label for="quantityAlert">Quantity Alert</label>
                                    <input type="number" class="form-control" id="quantityAlert" name="quantityAlert" placeholder="Enter Quantity Alert">
                                </div>

                                <!-- Images -->
                                <div class="form-group">
                                    <label for="productImages">Add Images</label>
                                    <input type="file" class="form-control-file" id="productImages" name="productImages[]" multiple accept="image/*">
                                    <small class="form-text text-muted">You can upload multiple images.</small>
                                </div>

                                <!-- Additional Fields -->
                                <div class="form-group">
                                    <label for="manufacturedDate">Manufactured Date</label>
                                    <input type="date" class="form-control" id="manufacturedDate" name="manufacturedDate">
                                </div>
                                <div class="form-group">
                                    <label for="expiryDate">Expiry On</label>
                                    <input type="date" class="form-control" id="expiryDate" name="expiryDate">
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Product</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include('footer.php'); ?>