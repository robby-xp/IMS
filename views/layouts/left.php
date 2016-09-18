<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'MENU', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'glyphicon glyphicon-home', 'url' => ['/']],
                    ['label' => 'Barang', 'icon' => 'glyphicon glyphicon-gift', 'url' => '#', 'items' => [
                        ['label' => 'List Barang', 'icon' => 'fa fa-list', 'url' => ['/item'],],
                        ['label' => 'Input Barang', 'icon' => 'fa fa-plus-circle', 'url' => ['/item/create'],],
                    ]],
                    ['label' => 'Pembelian', 'icon' => 'glyphicon glyphicon-import', 'url' => '#', 'items' => [
                        ['label' => 'List Pembelian', 'icon' => 'fa fa-list', 'url' => ['/purchase'],],
                        ['label' => 'Input Pembelian', 'icon' => 'fa fa-plus-circle', 'url' => ['/purchase/create'],],
                    ]],
                    ['label' => 'Penjualan', 'icon' => 'glyphicon glyphicon-export', 'url' => '#', 'items' => [
                        ['label' => 'List Penjualan', 'icon' => 'fa fa-list', 'url' => ['/sale'],],
                        ['label' => 'Input Penjualan', 'icon' => 'fa fa-plus-circle', 'url' => ['/sale/create'],],
                    ]],
                ],
            ]
        ) ?>
    </section>
</aside>
