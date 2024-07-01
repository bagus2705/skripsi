<?php

// app/Services/OcrServices.php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OcrServices
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OCR_SPACE_API_KEY');
    }

    public function recognizeText($imagePath)
    {
        try {
            $response = Http::attach('file', file_get_contents($imagePath), 'image.png')
            ->post('https://api.ocr.space/parse/image', [
                'apikey' => $this->apiKey,
            ]);

            $data = $response->json();

            if (isset($data['ParsedResults'][0]['ParsedText'])) {
                return $data['ParsedResults'][0]['ParsedText'];
            } else {
                \Illuminate\Support\Facades\Log::error('OCR API Response does not contain ParsedText');            }
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('OCR API Request Error: ' . $e->getMessage());        }

        return null;
    }

}
