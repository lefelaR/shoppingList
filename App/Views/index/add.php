<?php

global $context;
$items = $context->data;


if (isset($items['id'])) {
    $title = 'Edit';
    $id =  $items['id'];
    $action = 'update';
} else {
    $title = 'Add';
    $id = '';
    $action = 'save';
}

$name = (isset($items['name'])) ? $items['name'] : '';
$quantity = (isset($items['quantity'])) ? $items['quantity'] : '';
?>
<section id="heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 my-5 text-center">
                <p class="fs-3 fw-bold text-secondary"> <?php echo $title; ?> Shopping List </p>
            </div>
        </div>
    </div>
</section>

<section class="list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form class="form" action="'.$action.'" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Item name</label>
                                <input type="name" name="name" class="form-control" id="name" value="<?php echo $name ;?>"> 
                                
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" name="quantity" id="quantity" value="<?php echo $quantity; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>