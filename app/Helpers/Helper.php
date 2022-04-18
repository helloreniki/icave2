<?php

function statamic_image($image, $params)
{
    if ($image instanceof Statamic\Fields\Value) { $image = $image->value(); }
    if (!$image instanceof Statamic\Assets\Asset) { return null; }
    return app(Statamic\Contracts\Imaging\ImageManipulator::class)->item($image)->params($params)->build();
}
