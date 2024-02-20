<tr>
    <td><?= $hotel['name'] ?></td>
    <td><?= $hotel['description'] ?></td>
    <td>
        <?php if($hotel['parking']): ?>
            <div class="check check-green">
                <i class="fa-solid fa-check"></i>
            </div>
        <?php else: ?>
            <div class="check check-red">
                <i class="fa-solid fa-xmark"></i>
            </div>
        <?php endif ?>
    </td>
    <td><?= $hotel['vote'] ?></td>
    <td><?= $hotel['distance_to_center'] ?></td>
</tr>