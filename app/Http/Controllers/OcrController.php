<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OcrServices;

class OcrController extends Controller
{
    protected $ocrService;

    public function __construct(OcrServices $ocrService)
    {
        $this->ocrService = $ocrService;
    }

    public function performOCR(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->getPathname();
        $text = $this->ocrService->recognizeText($imagePath);

        return response()->json(['text' => $text]);
    }
}
