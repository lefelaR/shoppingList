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
                    <div class="card-header">

                        <a class="btn btn-sm btn-secondary float-end" href="<?php echo buildurl('index/add'); ?>">
                            + Add
                        </a>

                    </div>
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
                                foreach ($items as $key => $item) {
                                    $key++;
                                    if(isset($item['status']))
                                    {
                                        if($item['status'] == 1) $style = 'table-secondary';
                                        else $style = 'table-light';
                                    }
                                    echo    '<tr class="'.$style.'">
                                        <th scope="row">' . $key . '</th>
                                        <td>
                                            ' . $item['name'] . '</td>
                                        <td>
                                            ' . $item['quantity'] . '
                                        </td>
                                        <td> 
                                            <a class="btn btn-sm btn-success" href="index/add?id=' .  $item['id'] . '">
                                            Edit
                                            </a>
                                            <a class="btn btn-sm btn-danger" href="index/delete?id=' .  $item['id'] . '"">
                                            Delete
                                            </a>
                                            <span class="form-switch">
                                            
                                            ';
                                            $checked = $item['status'] == 1 ? "checked" : "";
                                            echo '<input class="form-check-input" type="checkbox" onclick="handleToggle(event)" data_id="' . $item['status'] . '" name="switch" id="' . $item['id'] . '" ' . $checked . '></span>';
                                       echo '</td>
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

<script>
const handleToggle = (event) =>{
    var itemCheck = event.target
        var checked = itemCheck.checked;
        var itemId = itemCheck.id;
        const formData = new FormData();
        formData.append("status", checked);
        formData.append("id", itemId);
        const currentURL = window.location.href;
        const stripped = currentURL.substring(0, currentURL.lastIndexOf("/"));
        fetch(stripped +'/index/'+ 'updatestatus', {
            method: "post",
            body: formData,
          })
          .then((response) => {
            location.reload()
          })
          .catch((err) => {
            console.log(err)
          });
      }
</script>