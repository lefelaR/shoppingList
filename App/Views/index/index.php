<?php

global $context;
$items = $context->data;

?>


<section id="heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 my-5 text-center">
                <p class="fs-3 fw-bold text-secondary"> Shopping List </p>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Quantiry</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                            foreach ($items as $key => $item) 
                            {   
                                $key++;
                                echo    '<tr>
                                        <th scope="row">'.$key.'</th>
                                        <td>
                                            '.$item['name'].'</td>
                                        <td>
                                            '.$item['quantity'].'
                                        </td>
                                        <td> 
                                            <a class="btn btn-sm btn-success" href="add?id=' .  $item['id'] . '">
                                            Edit
                                            </a>
                                            <a class="btn btn-sm btn-danger" href="delete?id=' .  $item['id'] . '"">
                                            Delete
                                        </td>
                                        </tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>