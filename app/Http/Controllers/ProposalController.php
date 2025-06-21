<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
use Illuminate\Support\Facades\Http;


class ProposalController extends Controller
{
    public function index()
    {
        return view('proposal');
    }

   public function generate(Request $request)
{
    $request->validate([
        'job_title' => 'required|string',
        'job_description' => 'required|string',
    ]);

$prompt = "You are an expert Upwork freelancer ai proposal writer known for writing highly effective, client-winning proposals. Please write a compelling and personalized proposal based on the following job:

Job Title: '{$request->job_title}'
Job Description: '{$request->job_description}'

Instructions:
- Begin with a warm greeting (e.g., 'Hi' or 'Hello')
- Use a friendly, professional, and confident tone 
- Highlight your most relevant skills and experience
- Briefly explain how you’ll approach the project
- Include 1–2 relevant past achievements or projects (keep general if needed)
- End with a strong, clear call-to-action encouraging the client to respond
- Keep the total length between 100–150 words
- Use proper paragraph formatting and line breaks
- Do not include any placeholder text or brackets
- The proposal should feel authentic, human, and directly tailored to this opportunity

Your response should be ready to paste directly into Upwork — no headings or formatting required, just a clean, well-written proposal.";
$apiKey = config('services.gemini.api_key'); // Best practice instead of env()
$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key={$apiKey}";

    try {
       $response = Http::withHeaders([
    'Content-Type' => 'application/json',
])->post($url, [
    'contents' => [
        [
            'parts' => [
                ['text' => $prompt]
            ]
        ]
    ]
]);

        if ($response->successful()) {
            $result = $response->json();
            $text = $result['candidates'][0]['content']['parts'][0]['text'] ?? 'No response text';
            return response()->json(['proposal' => $text]);
        } else {
            \Log::error('Gemini API error: ' . $response->body());
            return response()->json(['error' => 'Gemini API call failed'], 500);
        }

    } catch (\Throwable $e) {
        \Log::error('Gemini Request Exception: ' . $e->getMessage());
        return response()->json(['error' => 'Server error while generating proposal.'], 500);
    }
}

}