<?php
// [Function_name, [width, height, filter], [initial_value, final_value, step]] 

return [
    ["resizeImage", [480, 240, Imagick::FILTER_POINT],     [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_BOX],       [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_TRIANGLE],  [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_HERMITE],   [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_HANNING],   [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_HAMMING],   [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_BLACKMAN],  [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_GAUSSIAN],  [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_QUADRATIC], [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_CUBIC],     [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_CATROM],    [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_MITCHELL],  [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_LANCZOS],   [0, 2, 0.5]], 
    ["resizeImage", [480, 240, Imagick::FILTER_BESSEL],    [0, 2, 0.5]],
    ["resizeImage", [480, 240, Imagick::FILTER_SINC],      [0, 2, 0.1]]
];
?>