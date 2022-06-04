<?php if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (! empty($arResult)) { ?>
    <table class="table m-0">
        <thead>
            <tr>
                <th>№</th>
                <th>ФИО</th>
                <th>Телефон</th>
                <th>Город</th>
                <th>Улица</th>
                <th>Дом</th>
                <th>Квартира</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
            <tr>
                <th scope="row"><?=$item['ID'];?></th>
                <td><?=$item['PROPERTIES']['FIO']['VALUE'];?></td>
                <td><?=$item['PROPERTIES']['PHONE']['VALUE'];?></td>
                <td><?=$item['PROPERTY_ADDRESS_PROPERTY_CITY_VALUE'];?></td>
                <td><?=$item['PROPERTY_ADDRESS_PROPERTY_STREET_VALUE'];?></td>
                <td><?=$item['PROPERTY_ADDRESS_PROPERTY_HOUSE_VALUE'];?></td>
                <td><?=$item['PROPERTY_ADDRESS_PROPERTY_APPARTMENT_VALUE'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }
