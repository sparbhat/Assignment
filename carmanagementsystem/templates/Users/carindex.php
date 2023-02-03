<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Car> $cars
 */
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap User Management Data Table</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {

            width: 1000px;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #299be4;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn {
            color: #566787;
            float: right;
            font-size: 13px;
            background: #fff;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn:hover,
        .table-title .btn:focus {
            color: #566787;
            background: #f2f2f2;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.settings {
            color: #2196F3;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .status {
            font-size: 30px;
            margin: 2px 2px 0 0;
            display: inline-block;
            vertical-align: middle;
            line-height: 10px;
        }

        .text-success {
            color: #10c469;
        }

        .text-info {
            color: #62c9e8;
        }

        .text-warning {
            color: #FFC107;
        }

        .text-danger {
            color: #ff5b5b;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <br>
    <br>
    <div class="container">
        <div class="table">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>The <b>Car Panel</b></h2>
                        </div>
                        <div class="col-sm-7">

                            <a href="http://localhost:8765/users/logout" class="btn btn-secondary"><i
                                    class="material-icons">logout</i></a>
                            <a href="http://localhost:8765/users/addcar" class="btn btn-secondary"><i
                                    class="material-icons">&#xE147;</i> <span>Add New
                                    Car
                                </span></a>
                            <a href="http://localhost:8765/users/index" class="btn btn-secondary"><i
                                    class="material-icons person">&#xe7fd;</i> <span>User
                                    Listing
                                </span></a>
                            <a href="http://localhost:8765/ratings" class="btn btn-secondary"><i
                                    class="material-icons star">&#xe838;</i> <span>Ratings List
                                </span></a>

                        </div>
                    </div>
                </div>
                <?= $this->Form->create(null, ['type' => 'get']) ?>
                <?= $this->Form->control('', [
                    'Placeholder' => 'Search car',
                    'name' => 'key',
                    'style' => 'width:300px; height:30px;',
                    'class' => "form-control mr-sm-2",
                    'value' => $this->request->getQuery('key')
                ]) ?>
                <!-- <?= $this->Form->submit() ?> -->
                <?= $this->Form->end() ?>
                <br>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <?= $this->Paginator->sort('id') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('Name') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('brand_id') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('Make') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('Model') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('Color') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('Description') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('image') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('status') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('created_at') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('modified_at') ?>
                            </th>
                            <th>
                                <?= $this->Paginator->sort('Action') ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cars as $car): ?>
                            <tr>
                                <td>
                                    <?= $this->Number->format($car->id) ?>
                                </td>
                                <!-- <td>
                                                                                                                                                                                                                                                                                                                                                                        <?= $car->has('user') ? $this->Html->link($car->user->id, ['controller' => 'Users', 'action' => 'view', $car->user->id]) : '' ?>
                                                                                                                                                                                                                                                                                                                                                                    </td> -->
                                <td>
                                    <?= h($car->Name) ?>
                                </td>
                                <td>
                                    <?= $car->has('brand') ? $this->Html->link($car->brand->name, ['controller' => 'Brands', 'action' => 'view', $car->brand->id]) : '' ?>
                                </td>
                                <td>
                                    <?= h($car->Make) ?>
                                </td>
                                <td>
                                    <?= h($car->Model) ?>
                                </td>
                                <td>
                                    <?= h($car->Color) ?>
                                </td>
                                <td>
                                    <?= h($car->Description) ?>
                                </td>
                                <td>
                                    <?= $this->Html->image($car->image) ?>
                                </td>
                                <td>
                                    <?php if ($car->status == 1): ?>
                                        <?= $this->Form->postLink(__('Active'), ['action' => 'status', $car->id, $car->status], ['block' => true, 'confirm' => __('Are you sure you want to inactive # {0}?', $car->id)]) ?>
                                    <?php else: ?>
                                        <?= $this->Form->postLink(__('Inactive'), ['action' => 'status', $car->id, $car->status], ['block' => true, 'confirm' => __('Are you sure you want to active # {0}?', $car->id)]) ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?= h($car->created_at) ?>
                                </td>
                                <td>
                                    <?= h($car->modified_at) ?>
                                </td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'cars', 'action' => 'view', $car->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'cars', 'action' => 'edit', $car->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'cars', 'action' => 'delete', $car->id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $this->fetch('postLink'); ?>

                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p>
                        <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(functio n() {
        $('.inac').click(functio n() {
            var status = $(this).val();
            var id = $(this).prev('a').click();
        })
    });
</script>

</html>