<div class="gallery-wrapper">
    <button class="arrow" id="prevBtn">&larr;</button>
    <table>
        <tr id="gallery-row">
            <?php foreach ($images as $image): ?>
                <td class="gallery-image" style="display: none;">
                    <img src="<?= $webPath . '/' . basename($image) ?>" alt="tourist's picture" width="150"/>
                </td>
            <?php endforeach; ?>
        </tr>
    </table>
    <button class="arrow" id="nextBtn">&rarr;</button>
</div>