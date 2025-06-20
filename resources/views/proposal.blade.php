<!DOCTYPE html>
<html>
<head>
    <title>Upwork Proposal Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <style>
        /* Upwork Brand Colors */
        :root {
            --upwork-green: #14a800;
            --upwork-green-hover: #108a00;
            --upwork-dark-green: #0d7300;
            --upwork-light-green: #37b24d;
            --upwork-gray: #5e6d75;
            --upwork-light-gray: #f2f7f2;
            --upwork-border: #d5e0d5;
        }
        
        .upwork-green {
            background-color: var(--upwork-green);
        }
        
        .upwork-green-hover:hover {
            background-color: var(--upwork-green-hover);
        }
        
        .upwork-border {
            border-color: var(--upwork-border);
        }
        
        .upwork-text-gray {
            color: var(--upwork-gray);
        }
        
        .upwork-bg-light {
            background-color: var(--upwork-light-gray);
        }
        
        /* Upwork-style shadows */
        .upwork-shadow {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        .upwork-shadow-lg {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        /* Loading spinner */
        .loading-spinner {
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        /* Slide animation */
        .slide-in {
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        /* Upwork-style input focus */
        .upwork-input:focus {
            border-color: var(--upwork-green);
            box-shadow: 0 0 0 2px rgba(20, 168, 0, 0.1);
        }
        
        /* Header styling */
        .upwork-header {
            background: #fff;
            border-bottom: 1px solid #e4e4e4;
        }
        
        /* Card styling */
        .upwork-card {
            background: #fff;
            border: 1px solid #e4e4e4;
            border-radius: 12px;
        }
        
        /* Button styling */
        .upwork-btn {
            border-radius: 20px;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        
        .upwork-btn:hover {
            transform: translateY(-1px);
        }
        
        /* Result card styling */
        .result-card {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans min-h-screen">
    <!-- Upwork-style Header -->
    <header class="upwork-header upwork-shadow sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <!-- Upwork Logo Replacement -->
                <div class="flex items-center">
                    <div class="w-10 h-10 upwork-green rounded-full flex items-center justify-center text-white font-bold text-lg mr-3">
                        U
                    </div>
                    <span class="text-2xl font-bold text-gray-900">Upwork</span>
                    <span class="ml-2 px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">AI TOOL</span>
                </div>
            </div>
            <nav class="hidden md:flex items-center space-x-6">
    <a href="https://www.upwork.com/freelance-jobs/" target="_blank" rel="noopener noreferrer" class="text-gray-700 hover:text-gray-900 font-medium">Find Work</a>
    <a href="https://www.upwork.com/" target="_blank" rel="noopener noreferrer" class="text-gray-700 hover:text-gray-900 font-medium">Upwork</a>
    <a href="https://www.fiverr.com/" target="_blank" rel="noopener noreferrer" class="text-gray-700 hover:text-gray-900 font-medium">Fiverr</a>
    <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" class="text-gray-700 hover:text-gray-900 font-medium">LinkedIn</a>
</nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 py-8">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                AI Proposal Generator
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Create winning Upwork proposals in seconds with AI-powered writing assistance
            </p>
            <div class="mt-6 flex items-center justify-center">
                <div class="flex items-center bg-green-50 px-4 py-2 rounded-full">
                    <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                   <p class="text-gray-600">
    <span class="font-semibold">AI Proposal Generator</span> • 
    <span class="text-green-800 font-medium">Powered by Advanced AI</span> • 
    <span class="text-red-500 font-medium">Made with ❤️ by Zeeshan Ali</span> • 
    
</p>
                </div>
            </div>
        </div>

        <!-- Main Form Card -->
        <div class="upwork-card upwork-shadow-lg mb-8">
            <div class="p-8">
                <form id="proposalForm" class="space-y-8">
                    <!-- Job Title Input -->
                    <div class="space-y-3">
                        <label class="block text-lg font-semibold text-gray-900 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2m-8 0H6a2 2 0 00-2 2v6a2 2 0 002 2h2m8-8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2"/>
                            </svg>
                            Job Title
                        </label>
                        <input 
                            type="text" 
                            name="job_title" 
                            placeholder="e.g., Full Stack Developer for E-commerce Platform"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg upwork-input transition-all duration-200 text-gray-900 placeholder-gray-500" 
                            required
                        >
                        <p class="text-sm text-gray-500">Copy the exact job title from the Upwork posting</p>
                    </div>

                    <!-- Job Description Input -->
                    <div class="space-y-3">
                        <label class="block text-lg font-semibold text-gray-900 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Job Description
                        </label>
                        <textarea 
                            name="job_description" 
                            placeholder="Paste the complete job description including requirements, skills needed, project details, and any specific instructions from the client..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg upwork-input transition-all duration-200 text-gray-900 placeholder-gray-500 resize-none" 
                            rows="8" 
                            required
                        ></textarea>
                        <p class="text-sm text-gray-500">Include all details from the job posting for best results</p>
                    </div>

                    <!-- Generate Button -->
                    <div class="flex justify-center pt-4">
                        <button 
                            type="submit" 
                            id="generateBtn"
                            class="upwork-green upwork-green-hover text-white px-8 py-4 upwork-btn text-lg font-semibold upwork-shadow flex items-center min-w-64 justify-center"
                        >
                            <span id="buttonText" class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                Generate Proposal
                            </span>
                            <div id="loadingSpinner" class="hidden flex items-center">
                                <svg class="loading-spinner w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Generating...
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <div id="proposalResult" class="hidden slide-in">
            <div class="upwork-card upwork-shadow-lg">
                <div class="p-8">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">Your AI-Generated Proposal</h3>
                                <p class="text-gray-600">Ready to submit on Upwork</p>
                            </div>
                        </div>
                        <button 
                            id="copyButton" 
                            class="upwork-green upwork-green-hover text-white px-4 py-2 upwork-btn flex items-center upwork-shadow"
                            title="Copy to clipboard"
                        >
                            <svg id="copyIcon" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <span id="copyText">Copy</span>
                        </button>
                    </div>
                    
                    <div class="result-card p-6">
                        <p id="proposalText" class="text-gray-800 leading-relaxed whitespace-pre-wrap text-base"></p>
                    </div>
                    
                    <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-blue-900 mb-1">Pro Tip</h4>
                                <p class="text-blue-800 text-sm">Review and personalize this proposal before submitting. Add specific examples from your portfolio and adjust the tone to match your style.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!-- Footer -->
<footer class="mt-16 py-8 border-t border-gray-200 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <p class="text-gray-600">
            <span class="font-semibold">AI Proposal Generator</span> • 
            Powered by Advanced AI • 
            <span class="text-green-600">Boost Your Upwork Success</span>
        </p>
        <div class="mt-4 flex items-center justify-center space-x-6 text-sm text-gray-500">
            <span class="flex items-center">
                <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                Professional Quality
            </span>
            <span class="flex items-center">
                <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                Instant Results
            </span>
            <span class="flex items-center">
                <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                Tailored Content
            </span>
        </div>
        <p class="mt-6 text-xs text-gray-400">
            Made with <span class="text-red-500">❤️</span> by <span class="font-semibold text-gray-600">Zeeshan Ali</span>
        </p>
    </div>
</footer>

    <script>
        document.getElementById('proposalForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            const generateBtn = document.getElementById('generateBtn');
            const buttonText = document.getElementById('buttonText');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const proposalResult = document.getElementById('proposalResult');
            
            generateBtn.disabled = true;
            generateBtn.classList.add('opacity-75', 'cursor-not-allowed');
            buttonText.classList.add('hidden');
            loadingSpinner.classList.remove('hidden');
            proposalResult.classList.add('hidden');
            
            const formData = new FormData(this);
            fetch('/generate-proposal', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(async response => {
                if (!response.ok) {
                    const text = await response.text();
                    throw new Error(text);
                }
                return response.json();
            })
            .then(data => {
                const proposalText = document.getElementById('proposalText');
                proposalText.textContent = data.proposal;
                proposalResult.classList.remove('hidden');
                proposalResult.scrollIntoView({ behavior: 'smooth', block: 'start' });
            })
            .catch(error => {
                console.error('Error:', error);
                const proposalText = document.getElementById('proposalText');
                proposalText.textContent = 'Error generating proposal. Please try again or check console for details.';
                proposalResult.classList.remove('hidden');
            })
            .finally(() => {
                // Reset button state
                generateBtn.disabled = false;
                generateBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                buttonText.classList.remove('hidden');
                loadingSpinner.classList.add('hidden');
            });
        });

        document.getElementById('copyButton').addEventListener('click', function() {
            const proposalText = document.getElementById('proposalText').textContent;
            const copyIcon = document.getElementById('copyIcon');
            const copyText = document.getElementById('copyText');
            
            navigator.clipboard.writeText(proposalText).then(() => {
                // Show success state
                copyIcon.innerHTML = '<path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>';
                copyText.textContent = 'Copied!';
                
                setTimeout(() => {
                    copyIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>';
                    copyText.textContent = 'Copy';
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        });
    </script>
</body>
</html>