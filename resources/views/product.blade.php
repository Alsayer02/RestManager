<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Premium Leather Handbag - Luxury Fashion</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/product.js'])
</head>
<body class="bg-(--color-background)">
    <!-- Navigation Header -->
    <nav class="bg-(--color-surface) border-b border-(--color-border) sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-heading">LUXE</h1>
                </div>
                <div class="flex items-center gap-6">
                    <a href="#" class="text-(--color-text-secondary) hover:text-(--color-primary) transition-colors">Shop</a>
                    <a href="#" class="text-(--color-text-secondary) hover:text-(--color-primary) transition-colors">Collections</a>
                    <a href="#" class="text-(--color-text-secondary) hover:text-(--color-primary) transition-colors">About</a>
                    <button class="relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-(--color-accent) text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Product Section -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Product Gallery -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="relative bg-(--color-surface) rounded-lg overflow-hidden aspect-square shadow-md">
                    <img 
                        id="mainImage" 
                        src="https://images.pexels.com/photos/16690455/pexels-photo-16690455.jpeg" 
                        alt="Premium Leather Handbag - Main View"
                        class="w-full h-full object-cover cursor-zoom-in"
                    >
                    <button id="prevImage" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white rounded-full p-2 shadow-md transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button id="nextImage" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white rounded-full p-2 shadow-md transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Thumbnail Images -->
                <div class="grid grid-cols-4 gap-3">
                    <button class="thumbnail-btn active aspect-square rounded-md overflow-hidden border-2 border-(--color-primary) transition-all" data-image="https://images.pexels.com/photos/16690455/pexels-photo-16690455.jpeg">
                        <img src="https://images.pexels.com/photos/16690455/pexels-photo-16690455.jpeg" alt="View 1" class="w-full h-full object-cover">
                    </button>
                    <button class="thumbnail-btn aspect-square rounded-md overflow-hidden border-2 border-transparent hover:border-(--color-neutral) transition-all" data-image="https://images.unsplash.com/photo-1567744875520-cf9c27fbb53b">
                        <img src="https://images.unsplash.com/photo-1567744875520-cf9c27fbb53b" alt="View 2" class="w-full h-full object-cover">
                    </button>
                    <button class="thumbnail-btn aspect-square rounded-md overflow-hidden border-2 border-transparent hover:border-(--color-neutral) transition-all" data-image="https://images.pexels.com/photos/6801215/pexels-photo-6801215.jpeg">
                        <img src="https://images.pexels.com/photos/6801215/pexels-photo-6801215.jpeg" alt="View 3" class="w-full h-full object-cover">
                    </button>
                    <button class="thumbnail-btn aspect-square rounded-md overflow-hidden border-2 border-transparent hover:border-(--color-neutral) transition-all" data-image="https://images.unsplash.com/flagged/photo-1553802922-e345434156e6">
                        <img src="https://images.unsplash.com/flagged/photo-1553802922-e345434156e6" alt="View 4" class="w-full h-full object-cover">
                    </button>
                </div>
            </div>

            <!-- Product Information -->
            <div class="space-y-6">
                <!-- Brand & Title -->
                <div>
                    <p class="text-sm text-(--color-text-secondary) uppercase tracking-wider mb-2">LUXE COLLECTION</p>
                    <h1 class="text-4xl lg:text-5xl font-bold text-heading mb-3">Premium Leather Handbag</h1>
                    
                    <!-- Rating -->
                    <div class="flex items-center gap-3 mb-4">
                        <div class="flex items-center gap-1">
                            <svg class="w-5 h-5 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-(--color-neutral)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <span class="text-(--color-text-secondary)">4.2 (127 reviews)</span>
                    </div>
                    
                    <!-- Price -->
                    <div class="flex items-baseline gap-3">
                        <span class="text-4xl font-bold text-heading">$899.00</span>
                        <span class="text-xl text-(--color-text-muted) line-through">$1,299.00</span>
                        <span class="bg-(--color-accent) text-white px-3 py-1 rounded-full text-sm font-medium">30% OFF</span>
                    </div>
                </div>

                <!-- Description -->
                <p class="text-(--color-text-secondary) leading-relaxed">
                    Crafted from premium Italian leather, this sophisticated handbag combines timeless elegance with modern functionality. Features include a spacious interior, gold-tone hardware, and an adjustable shoulder strap for versatile styling.
                </p>

                <!-- Color Selection -->
                <div>
                    <label class="block text-sm font-medium mb-3">Color: <span id="selectedColor" class="text-(--color-text-secondary)">Cognac</span></label>
                    <div class="flex gap-3">
                        <button class="color-option w-10 h-10 rounded-full border-2 border-(--color-primary) ring-2 ring-offset-2 ring-(--color-primary)" style="background-color: #D4977A;" data-color="Cognac"></button>
                        <button class="color-option w-10 h-10 rounded-full border-2 border-transparent hover:border-(--color-neutral)" style="background-color: #1B1B1B;" data-color="Black"></button>
                        <button class="color-option w-10 h-10 rounded-full border-2 border-transparent hover:border-(--color-neutral)" style="background-color: #EFDFBB;" data-color="Beige"></button>
                        <button class="color-option w-10 h-10 rounded-full border-2 border-transparent hover:border-(--color-neutral)" style="background-color: #8B4513;" data-color="Chocolate"></button>
                    </div>
                </div>

                <!-- Size Selection -->
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <label class="block text-sm font-medium">Size</label>
                        <button class="text-sm text-(--color-accent) hover:underline">Size Guide</button>
                    </div>
                    <div class="grid grid-cols-3 gap-3">
                        <button class="size-option px-4 py-3 border-2 border-(--color-primary) bg-(--color-surface) rounded-md font-medium hover:bg-(--color-background) transition-all">Small</button>
                        <button class="size-option px-4 py-3 border-2 border-(--color-border) bg-(--color-surface) rounded-md font-medium hover:border-(--color-primary) transition-all">Medium</button>
                        <button class="size-option px-4 py-3 border-2 border-(--color-border) bg-(--color-surface) rounded-md font-medium hover:border-(--color-primary) transition-all">Large</button>
                    </div>
                </div>

                <!-- Quantity & Actions -->
                <div class="flex gap-4">
                    <div class="flex items-center border-2 border-(--color-border) rounded-md">
                        <button id="decreaseQty" class="px-4 py-3 hover:bg-(--color-background) transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                            </svg>
                        </button>
                        <span id="quantity" class="px-6 py-3 font-medium">1</span>
                        <button id="increaseQty" class="px-4 py-3 hover:bg-(--color-background) transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                    </div>
                    <button class="btn-primary flex-1">Add to Cart</button>
                    <button id="wishlistBtn" class="btn-secondary px-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>

                <!-- Features -->
                <div class="border-t border-(--color-border) pt-6 space-y-3">
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-(--color-success)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Free Shipping on orders over $500</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-(--color-success)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>30-Day Returns & Exchanges</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-(--color-success)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Secure Checkout</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="mt-16">
            <div class="border-b border-(--color-border)">
                <div class="flex gap-8">
                    <button class="tab-btn active px-4 py-4 font-medium border-b-2 border-(--color-primary) transition-colors" data-tab="description">Description</button>
                    <button class="tab-btn px-4 py-4 font-medium border-b-2 border-transparent text-(--color-text-secondary) hover:text-(--color-primary) transition-colors" data-tab="specifications">Specifications</button>
                    <button class="tab-btn px-4 py-4 font-medium border-b-2 border-transparent text-(--color-text-secondary) hover:text-(--color-primary) transition-colors" data-tab="reviews">Reviews (127)</button>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="py-8">
                <!-- Description Tab -->
                <div id="description" class="tab-content">
                    <div class="max-w-3xl">
                        <h3 class="text-2xl font-bold text-heading mb-4">Product Details</h3>
                        <p class="text-(--color-text-secondary) leading-relaxed mb-6">
                            This exquisite handbag represents the pinnacle of Italian craftsmanship. Each piece is meticulously handcrafted by skilled artisans using premium full-grain leather sourced from the finest tanneries in Tuscany.
                        </p>
                        <p class="text-(--color-text-secondary) leading-relaxed mb-6">
                            The design seamlessly blends classic elegance with contemporary functionality. The spacious main compartment features a luxurious suede lining and multiple interior pockets for organization. The adjustable leather strap allows for versatile carrying options, from shoulder to crossbody.
                        </p>
                        <h4 class="text-lg font-semibold mb-3">Key Features:</h4>
                        <ul class="space-y-2 text-(--color-text-secondary)">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-(--color-accent) mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Premium Italian full-grain leather</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-(--color-accent) mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Gold-tone hardware and signature logo</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-(--color-accent) mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Adjustable and removable shoulder strap</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-(--color-accent) mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Multiple interior pockets and compartments</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-(--color-accent) mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Protective dust bag included</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Specifications Tab -->
                <div id="specifications" class="tab-content hidden">
                    <div class="max-w-2xl">
                        <h3 class="text-2xl font-bold text-heading mb-6">Specifications</h3>
                        <div class="space-y-4">
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Material</span>
                                <span class="w-2/3 text-(--color-text-secondary)">100% Italian Full-Grain Leather</span>
                            </div>
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Lining</span>
                                <span class="w-2/3 text-(--color-text-secondary)">Premium Suede</span>
                            </div>
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Hardware</span>
                                <span class="w-2/3 text-(--color-text-secondary)">Gold-Tone Metal</span>
                            </div>
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Dimensions (Small)</span>
                                <span class="w-2/3 text-(--color-text-secondary)">10" W x 8" H x 4" D</span>
                            </div>
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Dimensions (Medium)</span>
                                <span class="w-2/3 text-(--color-text-secondary)">12" W x 10" H x 5" D</span>
                            </div>
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Dimensions (Large)</span>
                                <span class="w-2/3 text-(--color-text-secondary)">14" W x 12" H x 6" D</span>
                            </div>
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Weight</span>
                                <span class="w-2/3 text-(--color-text-secondary)">1.2 lbs (Medium)</span>
                            </div>
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Strap Drop</span>
                                <span class="w-2/3 text-(--color-text-secondary)">Adjustable 18" - 22"</span>
                            </div>
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Closure</span>
                                <span class="w-2/3 text-(--color-text-secondary)">Magnetic Snap</span>
                            </div>
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Care Instructions</span>
                                <span class="w-2/3 text-(--color-text-secondary)">Wipe clean with soft, dry cloth. Avoid water and harsh chemicals.</span>
                            </div>
                            <div class="flex py-3 border-b border-(--color-border)">
                                <span class="w-1/3 font-medium">Made In</span>
                                <span class="w-2/3 text-(--color-text-secondary)">Italy</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reviews Tab -->
                <div id="reviews" class="tab-content hidden">
                    <div class="max-w-4xl">
                        <!-- Review Summary -->
                        <div class="bg-(--color-surface) rounded-lg p-6 mb-8 shadow-sm">
                            <div class="flex items-start gap-8">
                                <div class="text-center">
                                    <div class="text-5xl font-bold text-heading mb-2">4.2</div>
                                    <div class="flex items-center gap-1 mb-2">
                                        <svg class="w-5 h-5 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-5 h-5 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-5 h-5 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-5 h-5 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <svg class="w-5 h-5 fill-(--color-neutral)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    </div>
                                    <p class="text-sm text-(--color-text-secondary)">Based on 127 reviews</p>
                                </div>
                                <div class="flex-1 space-y-2">
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm w-8">5★</span>
                                        <div class="flex-1 bg-(--color-background) rounded-full h-2">
                                            <div class="bg-(--color-accent) h-2 rounded-full" style="width: 65%"></div>
                                        </div>
                                        <span class="text-sm text-(--color-text-secondary) w-12">83</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm w-8">4★</span>
                                        <div class="flex-1 bg-(--color-background) rounded-full h-2">
                                            <div class="bg-(--color-accent) h-2 rounded-full" style="width: 20%"></div>
                                        </div>
                                        <span class="text-sm text-(--color-text-secondary) w-12">25</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm w-8">3★</span>
                                        <div class="flex-1 bg-(--color-background) rounded-full h-2">
                                            <div class="bg-(--color-accent) h-2 rounded-full" style="width: 8%"></div>
                                        </div>
                                        <span class="text-sm text-(--color-text-secondary) w-12">10</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm w-8">2★</span>
                                        <div class="flex-1 bg-(--color-background) rounded-full h-2">
                                            <div class="bg-(--color-accent) h-2 rounded-full" style="width: 5%"></div>
                                        </div>
                                        <span class="text-sm text-(--color-text-secondary) w-12">6</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm w-8">1★</span>
                                        <div class="flex-1 bg-(--color-background) rounded-full h-2">
                                            <div class="bg-(--color-accent) h-2 rounded-full" style="width: 2%"></div>
                                        </div>
                                        <span class="text-sm text-(--color-text-secondary) w-12">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sort & Filter -->
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-xl font-bold text-heading">Customer Reviews</h3>
                            <select class="px-4 py-2 border border-(--color-border) rounded-md text-sm">
                                <option>Most Recent</option>
                                <option>Highest Rated</option>
                                <option>Lowest Rated</option>
                            </select>
                        </div>

                        <!-- Review Cards -->
                        <div class="space-y-6">
                            <!-- Review 1 -->
                            <div class="bg-(--color-surface) rounded-lg p-6 shadow-sm">
                                <div class="flex items-start gap-4">
                                    <img src="https://i.pravatar.cc/80?u=sarah" alt="Sarah M." class="w-12 h-12 rounded-full">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-2">
                                            <div>
                                                <h4 class="font-semibold">Sarah M.</h4>
                                                <p class="text-sm text-(--color-text-secondary)">December 8, 2024</p>
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                            </div>
                                        </div>
                                        <h5 class="font-semibold mb-2">Absolutely Stunning!</h5>
                                        <p class="text-(--color-text-secondary) mb-3">This handbag exceeded all my expectations. The leather quality is exceptional, and the craftsmanship is evident in every detail. I've received so many compliments! Worth every penny.</p>
                                        <div class="flex items-center gap-2 mb-3">
                                            <span class="inline-flex items-center gap-1 text-xs bg-(--color-success)/10 text-(--color-success) px-2 py-1 rounded">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                                </svg>
                                                Verified Purchase
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-4 text-sm">
                                            <span class="text-(--color-text-secondary)">Was this helpful?</span>
                                            <button class="text-(--color-primary) hover:underline">Yes (24)</button>
                                            <button class="text-(--color-text-secondary) hover:underline">No (1)</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review 2 -->
                            <div class="bg-(--color-surface) rounded-lg p-6 shadow-sm">
                                <div class="flex items-start gap-4">
                                    <img src="https://i.pravatar.cc/80?u=emily" alt="Emily R." class="w-12 h-12 rounded-full">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-2">
                                            <div>
                                                <h4 class="font-semibold">Emily R.</h4>
                                                <p class="text-sm text-(--color-text-secondary)">November 28, 2024</p>
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-neutral)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                            </div>
                                        </div>
                                        <h5 class="font-semibold mb-2">Perfect Size and Quality</h5>
                                        <p class="text-(--color-text-secondary) mb-3">I ordered the medium size and it's perfect for daily use. Fits my laptop, wallet, and all essentials. The leather is soft yet durable. Only wish it came in more colors!</p>
                                        <div class="flex items-center gap-2 mb-3">
                                            <span class="inline-flex items-center gap-1 text-xs bg-(--color-success)/10 text-(--color-success) px-2 py-1 rounded">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                                </svg>
                                                Verified Purchase
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-4 text-sm">
                                            <span class="text-(--color-text-secondary)">Was this helpful?</span>
                                            <button class="text-(--color-primary) hover:underline">Yes (18)</button>
                                            <button class="text-(--color-text-secondary) hover:underline">No (0)</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review 3 -->
                            <div class="bg-(--color-surface) rounded-lg p-6 shadow-sm">
                                <div class="flex items-start gap-4">
                                    <img src="https://i.pravatar.cc/80?u=jessica" alt="Jessica L." class="w-12 h-12 rounded-full">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-2">
                                            <div>
                                                <h4 class="font-semibold">Jessica L.</h4>
                                                <p class="text-sm text-(--color-text-secondary)">November 15, 2024</p>
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                            </div>
                                        </div>
                                        <h5 class="font-semibold mb-2">Investment Piece</h5>
                                        <p class="text-(--color-text-secondary) mb-3">This is a true investment piece. The quality is outstanding and I know it will last for years. The cognac color is even more beautiful in person. Highly recommend!</p>
                                        <div class="flex items-center gap-2 mb-3">
                                            <span class="inline-flex items-center gap-1 text-xs bg-(--color-success)/10 text-(--color-success) px-2 py-1 rounded">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                                </svg>
                                                Verified Purchase
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-4 text-sm">
                                            <span class="text-(--color-text-secondary)">Was this helpful?</span>
                                            <button class="text-(--color-primary) hover:underline">Yes (32)</button>
                                            <button class="text-(--color-text-secondary) hover:underline">No (2)</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <button class="btn-secondary">Load More Reviews</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class="mt-20">
            <h2 class="text-3xl font-bold text-heading mb-8">You May Also Like</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product Card 1 -->
                <div class="product-card group">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="https://images.pexels.com/photos/28389455/pexels-photo-28389455.jpeg" alt="Diamond Earrings" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <button class="absolute top-4 right-4 bg-white/90 hover:bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold mb-2">Diamond Stud Earrings</h3>
                        <div class="flex items-center gap-1 mb-2">
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <span class="text-sm text-(--color-text-secondary) ml-1">(89)</span>
                        </div>
                        <p class="text-lg font-bold">$1,299.00</p>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card group">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="https://images.pexels.com/photos/26587316/pexels-photo-26587316.jpeg" alt="Leather Boots" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <button class="absolute top-4 right-4 bg-white/90 hover:bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold mb-2">Leather Ankle Boots</h3>
                        <div class="flex items-center gap-1 mb-2">
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-neutral)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <span class="text-sm text-(--color-text-secondary) ml-1">(64)</span>
                        </div>
                        <p class="text-lg font-bold">$549.00</p>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="product-card group">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1680484154921-7fbf3023bdf5" alt="Luxury Perfume" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <button class="absolute top-4 right-4 bg-white/90 hover:bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold mb-2">Signature Perfume</h3>
                        <div class="flex items-center gap-1 mb-2">
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <span class="text-sm text-(--color-text-secondary) ml-1">(156)</span>
                        </div>
                        <p class="text-lg font-bold">$189.00</p>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="product-card group">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1721808084767-5b26002e9ac2" alt="Silver Earrings" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <button class="absolute top-4 right-4 bg-white/90 hover:bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold mb-2">Silver Hoop Earrings</h3>
                        <div class="flex items-center gap-1 mb-2">
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-4 h-4 fill-(--color-neutral)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <span class="text-sm text-(--color-text-secondary) ml-1">(43)</span>
                        </div>
                        <p class="text-lg font-bold">$329.00</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-(--color-primary) text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold text-heading mb-4">LUXE</h3>
                    <p class="text-sm text-white/70">Premium luxury fashion and accessories for the modern individual.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Shop</h4>
                    <ul class="space-y-2 text-sm text-white/70">
                        <li><a href="#" class="hover:text-white transition-colors">New Arrivals</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Handbags</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Accessories</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Sale</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Customer Service</h4>
                    <ul class="space-y-2 text-sm text-white/70">
                        <li><a href="#" class="hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Shipping & Returns</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Size Guide</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Newsletter</h4>
                    <p class="text-sm text-white/70 mb-4">Subscribe for exclusive offers and updates.</p>
                    <div class="flex gap-2">
                        <input type="email" placeholder="Your email" class="flex-1 px-4 py-2 rounded-md bg-white/10 border border-white/20 text-white placeholder-white/50 focus:outline-none focus:border-white/40">
                        <button class="px-6 py-2 bg-white text-(--color-primary) rounded-md font-medium hover:bg-white/90 transition-colors">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="border-t border-white/20 mt-8 pt-8 text-center text-sm text-white/70">
                <p>&copy; 2024 LUXE. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>