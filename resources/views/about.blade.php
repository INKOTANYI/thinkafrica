<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Think Africa – Company Profile</title>
    @vite(['resources/css/app.css','resources/js/app.jsx'])
  </head>
  <body class="bg-white text-gray-800 antialiased">
    <!-- Top info bar (blue, sticky) -->
    <div class="sticky top-0 z-50 bg-gradient-to-r from-blue-600 to-blue-500 text-white text-sm shadow">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-10 flex items-center justify-between">
        <div class="flex flex-wrap items-center gap-4">
          <span>Tel: +250 783 323 024</span>
          <span class="hidden sm:inline">|</span>
          <span class="hidden sm:inline">Email: innocent250@gmail.com</span>
          <span class="hidden lg:inline">| Niboye, Kicukiro, Kigali, Rwanda</span>
        </div>

        <div class="flex items-center gap-4">
          <a aria-label="Facebook" href="#" class="transition-opacity hover:opacity-80"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-white"><path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-2.9h2v-2.2c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2v1.9h2.3L14 14.9h-2v7A10 10 0 0 0 22 12Z"/></svg></a>
          <a aria-label="Twitter" href="#" class="transition-opacity hover:opacity-80"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-white"><path d="M21 5.9c-.7.3-1.5.5-2.2.6.8-.5 1.4-1.2 1.7-2.1-.7.4-1.6.8-2.5 1-1.4-1.5-3.8-1.2-5 0-1 .9-1.4 2.3-1 3.6-3-.2-5.7-1.6-7.5-3.9-1 1.7-.5 3.9 1.1 5-.6 0-1.2-.2-1.7-.5 0 1.9 1.4 3.5 3.3 3.9-.6.2-1.2.2-1.8.1.5 1.6 2 2.8 3.8 2.9-1.4 1.1-3 1.7-4.7 1.7-.3 0-.6 0-.9-.1C5 20 6.9 20.6 9 20.6c6.4 0 9.9-5.5 9.7-10.4.8-.6 1.5-1.3 2-2.1Z"/></svg></a>
          <a aria-label="YouTube" href="#" class="transition-opacity hover:opacity-80"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-white"><path d="M23.5 6.2s-.2-1.7-.9-2.4c-.9-.9-1.9-.9-2.4-1C16.6 2.4 12 2.4 12 2.4h0s-4.6 0-8.2.4c-.5.1-1.5.1-2.4 1-.7.7-.9 2.4-.9 2.4S0 8.2 0 10.1v1.8c0 2 .2 3.9.2 3.9s.2 1.7.9 2.4c.9.9 2.2.8 2.8.9 2 .2 8.1.4 8.1.4s4.6 0 8.2-.4c.5-.1 1.5-.1 2.4-1 .7-.7.9-2.4.9-2.4s.2-1.9.2-3.9v-1.8c0-1.9-.2-3.9-.2-3.9ZM9.6 14.7V7.7l6.4 3.5-6.4 3.5Z"/></svg></a>
        </div>
      </div>
    </div>

    <!-- Navbar (white, sticky under topbar) -->
    <header class="sticky top-10 z-40 bg-white/95 backdrop-blur border-b border-gray-100 shadow-sm">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <a href="#" class="inline-flex items-center gap-2 text-xl font-semibold">
          <span class="inline-block size-2 rounded-full bg-blue-600"></span>
          <span>Think Africa</span>
        </a>
        <nav class="hidden md:flex items-center gap-6 text-sm">
          <a href="#about" class="hover:text-blue-700 transition-colors">About</a>
          <a href="#vision" class="hover:text-blue-700 transition-colors">Vision</a>
          <a href="#mission" class="hover:text-blue-700 transition-colors">Mission</a>
          <a href="#services" class="hover:text-blue-700 transition-colors">Services</a>
          <button type="button" data-appointment-open class="hover:text-blue-700 transition-colors">Book</button>
          <a href="#contact" class="hover:text-blue-700 transition-colors">Contact</a>
        </nav>
        <div class="flex items-center gap-2">
          <button type="button" data-appointment-open class="hidden md:inline-flex items-center justify-center rounded-full bg-blue-700 px-5 py-2 text-white font-medium shadow hover:bg-blue-800">Make an Appointment</button>
          <button type="button" aria-label="Open menu" data-menu-toggle class="md:hidden inline-flex items-center justify-center rounded-md p-2 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current text-gray-800"><path d="M4 7h16v2H4V7Zm0 4h16v2H4v-2Zm0 4h16v2H4v-2Z"/></svg>
          </button>
        </div>
      </div>
    </header>
    <!-- Mobile menu -->
    <div data-mobile-menu class="md:hidden hidden bg-white border-b border-gray-100 shadow-sm">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-4 flex flex-col gap-3 text-sm">
        <a href="#about" class="py-2 border-b border-gray-100">About</a>
        <a href="#vision" class="py-2 border-b border-gray-100">Vision</a>
        <a href="#mission" class="py-2 border-b border-gray-100">Mission</a>
        <a href="#services" class="py-2 border-b border-gray-100">Services</a>
        <a href="#contact" class="py-2">Contact</a>
        <div class="pt-2">
          <button type="button" data-appointment-open class="inline-flex w-full items-center justify-center rounded-full bg-blue-700 px-5 py-2 text-white font-medium shadow hover:bg-blue-800">Make an Appointment</button>
        </div>
      </div>
    </div>

    <!-- Hero slider (reduced height) -->
    <section class="relative overflow-hidden min-h-[60vh]">
      <div id="hero-slide" class="absolute inset-0 bg-center bg-cover"></div>
      <div class="absolute inset-0 bg-gradient-to-b from-black/85 via-black/70 to-black/50"></div>
      <div class="pointer-events-none absolute -right-24 top-0 h-[140%] w-[55%] -skew-x-12 bg-blue-800/30"></div>
      <div class="pointer-events-none absolute -right-40 top-20 h-[120%] w-[35%] -skew-x-12 bg-emerald-600/30"></div>

      <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20">
        <div class="max-w-3xl text-white">
          <p class="text-sm font-semibold text-emerald-200">Pan-African Advisory • Est. 2015 • Kigali, Rwanda</p>
          <h1 class="mt-2 text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">Policy, Regulatory, Strategic and Development Solutions for Africa</h1>
          <div class="mt-6">
            <a href="#services" class="inline-flex items-center justify-center rounded-md bg-emerald-600 px-6 py-3 text-white font-medium shadow hover:bg-emerald-700">Explore Services</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Shape divider to separate Contact and Footer -->
    <div class="relative bg-[#0f1a2e]"><svg class="block w-full" viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,64 C240,16 480,16 720,64 C960,112 1200,112 1440,64 L1440,80 L0,80 Z" fill="#0f1a2e"/><path d="M0,64 C240,24 480,24 720,64 C960,104 1200,104 1440,64 L1440,80 L0,80 Z" fill="#111A2F" opacity="0.6"/></svg></div>

    <section id="about" class="relative">
      <div class="absolute inset-0 -z-10 bg-gradient-to-b from-white via-emerald-50/30 to-blue-50/20"></div>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-10 opacity-0 translate-y-3 transition-all duration-700" data-fade>
          <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent">About Us</h2>
          <p class="mt-2 text-gray-600">Founded in 2015 • Kigali, Rwanda • Pan‑African impact</p>
        </div>
        <div class="mx-auto max-w-3xl text-center text-gray-700 leading-relaxed opacity-0 translate-y-3 transition-all duration-700" data-fade>
          Think Africa is a Pan‑African advisory firm dedicated to policy, regulatory, strategic, and development
          solutions. Our approach blends policy innovation, market‑driven delivery, ESG principles, and community
          engagement—positioning us as a trusted development partner across Africa.
          <br class="hidden sm:block" />
          We empower governments, private sector, NGOs and communities by addressing systemic barriers and unlocking opportunities for sustainable growth, inclusive trade and social transformation across Africa.
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-2 opacity-0 translate-y-3 transition-all duration-700" data-fade>
          <div class="rounded-2xl border border-emerald-100 bg-white p-8 shadow-sm hover:shadow-md">
            <h3 class="text-xl font-semibold">Vision</h3>
            <p class="mt-3 text-gray-700">To be the leading Pan‑African advisory and development partner, fostering innovation, trade, and sustainability across the continent.</p>
          </div>
          <div class="rounded-2xl border border-blue-100 bg-white p-8 shadow-sm hover:shadow-md">
            <h3 class="text-xl font-semibold">Mission</h3>
            <p class="mt-3 text-gray-700">To deliver cutting‑edge policy, business, and communication solutions that enable stakeholders to achieve transformative, impactful, and sustainable growth.</p>
          </div>
        </div>
        
      </div>
    </section>

    <!-- Vision & Mission merged into About -->

    <!-- Services (colorful cards, soft blue background) -->
    <section id="services" class="relative bg-blue-50">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
          <h2 class="text-3xl font-extrabold tracking-tight bg-gradient-to-r from-indigo-600 via-violet-600 to-emerald-600 bg-clip-text text-transparent">Our Services</h2>
          <p class="mt-2 text-gray-600">Comprehensive solutions to power development and inclusive growth.</p>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          <!-- Card template style repeated per service -->
          <div class="group rounded-2xl border border-transparent bg-gradient-to-br from-indigo-600 to-blue-600 p-0 shadow-lg transition-transform duration-300 hover:-translate-y-1">
            <div class="rounded-2xl bg-white p-6 h-full">
            <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-50 text-indigo-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current"><path d="M20 8h-3V4h-2v4H9V4H7v4H4v2h3v3H4v2h3v3h2v-3h6v3h2v-3h3v-2h-3V10h3V8Zm-5 5H9v-3h6v3Z"/></svg>
            </div>
            <h3 class="mt-4 font-semibold text-gray-900">Policy & Regulatory Advisory</h3>
            <p class="mt-2 text-sm text-gray-600">Policy research, engagement and compliance for better decisions.</p>
            <div class="mt-4">
              <button data-modal-open="service-1" class="text-indigo-600 hover:text-indigo-800 inline-flex items-center gap-1">Learn More <span>→</span></button>
            </div>
            </div>
          </div>

          <div class="group rounded-2xl border border-transparent bg-gradient-to-br from-fuchsia-600 to-purple-600 p-0 shadow-lg transition-transform duration-300 hover:-translate-y-1">
            <div class="rounded-2xl bg-white p-6 h-full">
            <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-fuchsia-50 text-fuchsia-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current"><path d="M14 3H5c-1.1 0-2 .9-2 2v9h2V5h9V3Zm5 4H10c-1.1 0-2 .9-2 2v11l4-2 4 2V9h3c1.1 0 2-.9 2-2V7Z"/></svg>
            </div>
            <h3 class="mt-4 font-semibold text-gray-900">Strategic Communications & Branding</h3>
            <p class="mt-2 text-sm text-gray-600">Corporate communications, media and brand positioning.</p>
            <div class="mt-4">
              <button data-modal-open="service-2" class="text-fuchsia-600 hover:text-fuchsia-800 inline-flex items-center gap-1">Learn More <span>→</span></button>
            </div>
            </div>
          </div>

          <div class="group rounded-2xl border border-transparent bg-gradient-to-br from-emerald-600 to-teal-600 p-0 shadow-lg transition-transform duration-300 hover:-translate-y-1">
            <div class="rounded-2xl bg-white p-6 h-full">
            <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current"><path d="M3 13h2v-2H3v2Zm0 4h2v-2H3v2ZM3 9h2V7H3v2Zm4 0h14V7H7v2Zm0 8h14v-2H7v2Zm0-6h14v-2H7v2Z"/></svg>
            </div>
            <h3 class="mt-4 font-semibold text-gray-900">Business & Market Development</h3>
            <p class="mt-2 text-sm text-gray-600">Trade facilitation, SME capacity and market linkages.</p>
            <div class="mt-4">
              <button data-modal-open="service-3" class="text-emerald-600 hover:text-emerald-800 inline-flex items-center gap-1">Learn More <span>→</span></button>
            </div>
            </div>
          </div>

          <div class="group rounded-2xl border border-transparent bg-gradient-to-br from-sky-600 to-indigo-600 p-0 shadow-lg transition-transform duration-300 hover:-translate-y-1">
            <div class="rounded-2xl bg-white p-6 h-full">
            <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-sky-50 text-sky-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current"><path d="M19 3H5c-1.1 0-2 .9-2 2v14l4-4h12c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2Z"/></svg>
            </div>
            <h3 class="mt-4 font-semibold text-gray-900">Legal & Corporate Affairs</h3>
            <p class="mt-2 text-sm text-gray-600">Registration, contracts, governance and compliance.</p>
            <div class="mt-4">
              <button data-modal-open="service-4" class="text-sky-600 hover:text-sky-800 inline-flex items-center gap-1">Learn More <span>→</span></button>
            </div>
            </div>
          </div>

          <div class="group rounded-2xl border border-transparent bg-gradient-to-br from-amber-500 to-orange-600 p-0 shadow-lg transition-transform duration-300 hover:-translate-y-1">
            <div class="rounded-2xl bg-white p-6 h-full">
            <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-amber-50 text-amber-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current"><path d="M7 14l5-5 5 5H7Z"/></svg>
            </div>
            <h3 class="mt-4 font-semibold text-gray-900">Training & Capacity Building</h3>
            <p class="mt-2 text-sm text-gray-600">Leadership, analysis and skills transition programs.</p>
            <div class="mt-4">
              <button data-modal-open="service-5" class="text-amber-600 hover:text-amber-800 inline-flex items-center gap-1">Learn More <span>→</span></button>
            </div>
            </div>
          </div>

          <div class="group rounded-2xl border border-transparent bg-gradient-to-br from-lime-600 to-emerald-600 p-0 shadow-lg transition-transform duration-300 hover:-translate-y-1">
            <div class="rounded-2xl bg-white p-6 h-full">
            <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-lime-50 text-lime-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current"><path d="M12 4a8 8 0 100 16 8 8 0 000-16Zm-1 12-4-4 1.4-1.4L11 12.2l4.6-4.6L17 9l-6 7Z"/></svg>
            </div>
            <h3 class="mt-4 font-semibold text-gray-900">ESG & Sustainable Development</h3>
            <p class="mt-2 text-sm text-gray-600">ESG metrics, inclusion and sustainable sectors.</p>
            <div class="mt-4">
              <button data-modal-open="service-6" class="text-lime-600 hover:text-lime-800 inline-flex items-center gap-1">Learn More <span>→</span></button>
            </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>

    <!-- Service Detail Modals -->
    @php
      $services = [
        'service-1' => [
          'title' => 'Policy & Regulatory Advisory',
          'bullets' => [
            'Evidence-based policy research and analysis across agriculture, trade, investment, education and more.',
            'Inclusive advocacy and stakeholder engagement forums.',
            'Drafting, review and implementation support for policies, laws and strategies.',
            'ESG alignment, compliance and impact measurement.'
          ]
        ],
        'service-2' => [
          'title' => 'Strategic Communications & Branding',
          'bullets' => [
            'Corporate communications strategies and implementation.',
            'Media relations and thought-leadership positioning.',
            'Storytelling, brand voice and reputation management.',
            'Events: roundtables, conventions, trade shows.'
          ]
        ],
        'service-3' => [
          'title' => 'Business & Market Development',
          'bullets' => [
            'Export development: market linkages, certifications, facilitation.',
            'Contract farming models and value chain integration.',
            'SME capacity building and readiness.',
            'Matchmaking platforms connecting buyers and sellers.'
          ]
        ],
        'service-4' => [
          'title' => 'Legal & Corporate Affairs',
          'bullets' => [
            'Business registration and compliance pathways.',
            'Contract drafting and negotiations.',
            'Corporate governance advisory.',
            'Due diligence and investigations.'
          ]
        ],
        'service-5' => [
          'title' => 'Training & Capacity Building',
          'bullets' => [
            'Policy analysis training for institutions.',
            'Leadership and governance training.',
            'Educational support services.',
            'Skills transition programs for vulnerable groups.'
          ]
        ],
        'service-6' => [
          'title' => 'ESG & Sustainable Development Advisory',
          'bullets' => [
            'ESG metrics and reporting frameworks.',
            'Gender and inclusion strategies.',
            'Sustainable agriculture and tourism.'
          ]
        ],
        'service-7' => [
          'title' => 'Tourism & Cultural Enterprises',
          'bullets' => [
            'Community-based tourism development.',
            'Agritourism initiatives.',
            'Destination branding and promotion.'
          ]
        ],
      ];
    @endphp
    @foreach($services as $id => $service)
      <div data-modal-id="{{ $id }}" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative mx-auto mt-16 max-w-xl overflow-hidden rounded-2xl bg-[#0f1a2e] text-gray-200 shadow-2xl">
          <div class="bg-indigo-600/90 px-6 py-4 text-white font-semibold">{{ $service['title'] }}</div>
          <div class="p-6">
          <ul class="list-disc pl-6 text-gray-300 space-y-1">
            @foreach($service['bullets'] as $b)
              <li>{{ $b }}</li>
            @endforeach
          </ul>
          <div class="mt-6 flex justify-end gap-2">
            <button class="rounded-md bg-blue-600 text-white px-5 py-2" data-book-service="{{ $service['title'] }}">Book an Appointment</button>
            <button data-modal-close class="rounded-md border border-white/20 px-5 py-2">Close</button>
          </div>
          </div>
        </div>
      </div>
    @endforeach

    <!-- Appointment Modal (no map) -->
    <div data-appointment-modal class="fixed inset-0 z-50 hidden">
      <div class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>
      <div class="relative mx-4 sm:mx-auto mt-16 max-w-lg rounded-2xl bg-white shadow-2xl ring-1 ring-black/10 max-h-[85vh] flex flex-col">
        <div class="flex items-center justify-between px-6 pt-5 pb-4 bg-gradient-to-r from-indigo-600 to-blue-600 text-white rounded-t-2xl">
          <h3 class="text-lg sm:text-xl font-semibold">Book an Appointment</h3>
          <button data-appointment-close class="text-white/90 hover:text-white">✕</button>
        </div>
        <form id="appointmentForm" method="POST" action="{{ route('appointments.store') }}" class="flex flex-col overflow-hidden">
          @csrf
          <input type="hidden" name="subject" value="Services" />
          <div class="px-6 pt-4 pb-2 grow overflow-y-auto grid gap-5">
            <div class="rounded-xl bg-slate-50 p-4 shadow-md">
              <div class="grid gap-4 sm:grid-cols-2">
              <div class="relative">
                <label class="block text-sm text-gray-700 mb-1">Your Full Name <span class="text-red-500">*</span></label>
                <span class="pointer-events-none absolute left-3 top-9 text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4 0-8 2-8 5v1h16v-1c0-3-4-5-8-5Z"/></svg>
                </span>
                <input type="text" name="name" required class="w-full rounded-lg border-gray-300 pl-10 pr-3 py-2 placeholder-gray-500 focus:border-blue-600 focus:ring-2 focus:ring-blue-200" />
              </div>
              <div class="relative">
                <label class="block text-sm text-gray-700 mb-1">Your Email Address <span class="text-red-500">*</span></label>
                <span class="pointer-events-none absolute left-3 top-9 text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm-1.4 3-6.6 4.15L5.4 7H18.6Z"/></svg>
                </span>
                <input type="email" name="email" required class="w-full rounded-lg border-gray-300 pl-10 pr-3 py-2 placeholder-gray-500 focus:border-blue-600 focus:ring-2 focus:ring-blue-200" />
              </div>
              <div class="relative">
                <label class="block text-sm text-gray-700 mb-1">Phone Number</label>
                <span class="pointer-events-none absolute left-3 top-9 text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M6.6 10.8a15.6 15.6 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.7 11.7 0 0 0 3.7.6 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 7a1 1 0 0 1 1-1h3.4a1 1 0 0 1 1 1 11.7 11.7 0 0 0 .6 3.7 1 1 0 0 1-.25 1Z"/></svg>
                </span>
                <input type="text" name="phone" class="w-full rounded-lg border-gray-300 pl-10 pr-3 py-2 placeholder-gray-500 focus:border-blue-600 focus:ring-2 focus:ring-blue-200" />
              </div>
              <div>
                <label class="block text-sm text-gray-700 mb-1">Preferred Date</label>
                <input type="date" name="preferred_date" class="w-full rounded-lg border-gray-300 px-3 py-2 focus:border-blue-600 focus:ring-2 focus:ring-blue-200" />
              </div>
              <div>
                <label class="block text-sm text-gray-700 mb-1">Preferred Time</label>
                <input type="time" name="preferred_time" class="w-full rounded-lg border-gray-300 px-3 py-2 focus:border-blue-600 focus:ring-2 focus:ring-blue-200" />
              </div>
              <div>
                <label class="block text-sm text-gray-700 mb-1">Select a service <span class="text-red-500">*</span></label>
                <select name="service" required class="w-full rounded-lg border-gray-300 px-3 py-2 focus:border-blue-600 focus:ring-2 focus:ring-blue-200" data-appointment-service>
                  <option value="">Select a service</option>
                  <option>Policy & Regulatory Advisory</option>
                  <option>Strategic Communications & Branding</option>
                  <option>Business & Market Development</option>
                  <option>Legal & Corporate Affairs</option>
                  <option>Training & Capacity Building</option>
                  <option>ESG & Sustainable Development Advisory</option>
                </select>
              </div>
              <div class="sm:col-span-2">
                <label class="block text-sm text-gray-700 mb-1">Your Message (optional)</label>
                <textarea name="message" rows="5" class="w-full rounded-lg border-gray-300 px-3 py-2 placeholder-gray-500 focus:border-blue-600 focus:ring-2 focus:ring-blue-200"></textarea>
              </div>
            </div>
            </div>
          </div>
          <div class="px-6 py-3 flex justify-end gap-2 bg-white border-t shrink-0">
            <button type="submit" class="rounded-md bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-5 py-2 min-w-[120px]" data-submit-btn>Submit</button>
            <button type="button" data-appointment-close class="rounded-md border px-5 py-2">Close</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Success Popup Modal (animated) -->
    <div data-success-modal class="fixed inset-0 z-50 hidden">
      <div data-success-backdrop class="absolute inset-0 bg-black/60 opacity-0 transition-opacity duration-300"></div>
      <div data-success-panel class="relative mx-4 sm:mx-auto mt-24 max-w-md rounded-2xl bg-white shadow-2xl ring-1 ring-black/10 transition-all duration-300 transform opacity-0 scale-95 translate-y-2">
        <div class="px-6 pt-5 pb-4 bg-gradient-to-r from-emerald-600 to-green-600 text-white rounded-t-2xl font-semibold">Success</div>
        <div class="p-6 text-gray-800">
          <p data-success-text>Your appointment request has been submitted. We will get back to you soon.</p>
          <div class="mt-6 flex justify-end">
            <button data-success-close class="rounded-md bg-emerald-600 hover:bg-emerald-700 text-white px-5 py-2">OK</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact (form + map) -->
    <section id="contact" class="bg-white">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid gap-10 lg:grid-cols-2">
          <!-- Contact form (light theme) -->
          <div>
            <form method="POST" action="{{ route('contact.store') }}" class="bg-white text-gray-800 p-6 rounded-xl border border-gray-200 shadow-lg">
              @csrf
              <h3 class="text-blue-700 text-2xl sm:text-3xl font-semibold">Send Us a Message</h3>
              <div class="mt-4 grid gap-4 sm:grid-cols-2">
                <div>
                  <label class="block text-sm text-gray-700 mb-1">Your Full Name <span class="text-red-500">*</span></label>
                  <input type="text" name="name" required class="w-full rounded-md border-gray-300 bg-white text-gray-900 placeholder-gray-500" placeholder="Your Full Name" />
                </div>
                <div>
                  <label class="block text-sm text-gray-700 mb-1">Your Email Address <span class="text-red-500">*</span></label>
                  <input type="email" name="email" required class="w-full rounded-md border-gray-300 bg-white text-gray-900 placeholder-gray-500" placeholder="Your Email Address" />
                </div>
                <div>
                  <label class="block text-sm text-gray-700 mb-1">Phone Number</label>
                  <input type="text" name="phone" class="w-full rounded-md border-gray-300 bg-white text-gray-900 placeholder-gray-500" placeholder="Phone Number" />
                </div>
                <div>
                  <label class="block text-sm text-gray-700 mb-1">Subject <span class="text-red-500">*</span></label>
                  <select name="subject" required class="w-full rounded-md border-gray-300 bg-white text-gray-900">
                    <option value="">Select a subject</option>
                    <option>General Inquiry</option>
                    <option>Partnership</option>
                    <option>Services</option>
                  </select>
                </div>
                <div class="sm:col-span-2">
                  <label class="block text-sm text-gray-700 mb-1">Your Message <span class="text-red-500">*</span></label>
                  <textarea name="message" required rows="6" class="w-full rounded-md border-gray-300 bg-white text-gray-900 placeholder-gray-500" placeholder="Tell us about your project or inquiry..."></textarea>
                </div>
                <div class="sm:col-span-2 text-xs text-gray-500">* Required fields</div>
                <div class="sm:col-span-2 flex justify-end">
                  <button type="submit" class="inline-flex items-center justify-center rounded-md bg-blue-600 hover:bg-blue-700 px-5 py-2 text-white">Send Message</button>
                </div>
              </div>
            </form>
          </div>

          <!-- Map card (light theme) -->
          <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-lg text-gray-800">
            <h3 class="text-blue-700 text-lg font-semibold">Find Us On Map</h3>
            <div class="mt-4">
              <iframe class="w-full h-72 rounded-lg border border-gray-200" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Niboye,+Kicukiro,+Kigali,+Rwanda&z=14&output=embed"></iframe>
            </div>
            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-2">
              <a href="https://maps.google.com/?q=Niboye,+Kicukiro,+Kigali,+Rwanda" target="_blank" class="inline-flex items-center justify-center rounded-md bg-blue-600 hover:bg-blue-500 text-white px-4 py-2">Open in Google Maps</a>
              <a href="https://www.google.com/maps/dir/?api=1&destination=Niboye,+Kicukiro,+Kigali,+Rwanda" target="_blank" class="inline-flex items-center justify-center rounded-md bg-emerald-600 hover:bg-emerald-500 text-white px-4 py-2">Get Directions</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Pre-footer CTA -->
    <section class="bg-[#0f1a2e]">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
        <div class="rounded-2xl bg-gradient-to-r from-indigo-600 to-blue-500 px-6 py-8 sm:px-10 sm:py-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
          <div>
            <h3 class="text-white text-xl sm:text-2xl font-semibold">Join Our Innovation Hub</h3>
            <p class="text-indigo-50 mt-2">We're building the future. Partner with us to shape Africa's development and trade landscape.</p>
          </div>
          <a href="#services" class="inline-flex items-center justify-center rounded-md bg-yellow-400 px-5 py-3 font-medium text-gray-900 hover:bg-yellow-300">Explore Opportunities</a>
        </div>
      </div>
    </section>

    <!-- Footer (dark multi-column) -->
    <footer class="bg-[#0f1a2e] text-gray-300">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12 grid gap-10 md:grid-cols-2">
        <div>
          <div class="flex items-center gap-2 text-white text-lg font-semibold">
            <span class="inline-block size-2 rounded-full bg-yellow-400"></span>
            Think Africa
          </div>
          <p class="mt-3 text-sm text-gray-400">Policy, regulatory, strategic and development solutions for Africa.</p>
          <div class="mt-4 flex items-center gap-3">
            <a href="#" class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-white/10 hover:bg-white/20">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-white"><path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-2.9h2v-2.2c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2v1.9h2.3L14 14.9h-2v7A10 10 0 0 0 22 12Z"/></svg>
            </a>
            <a href="#" class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-white/10 hover:bg-white/20">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-white"><path d="M21 5.9c-.7.3-1.5.5-2.2.6.8-.5 1.4-1.2 1.7-2.1-.7.4-1.6.8-2.5 1-1.4-1.5-3.8-1.2-5 0-1 .9-1.4 2.3-1 3.6-3-.2-5.7-1.6-7.5-3.9-1 1.7-.5 3.9 1.1 5-.6 0-1.2-.2-1.7-.5 0 1.9 1.4 3.5 3.3 3.9-.6.2-1.2.2-1.8.1.5 1.6 2 2.8 3.8 2.9-1.4 1.1-3 1.7-4.7 1.7-.3 0-.6 0-.9-.1C5 20 6.9 20.6 9 20.6c6.4 0 9.9-5.5 9.7-10.4.8-.6 1.5-1.3 2-2.1Z"/></svg>
            </a>
            <a href="#" class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-white/10 hover:bg-white/20">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-white"><path d="M23.5 6.2s-.2-1.7-.9-2.4c-.9-.9-1.9-.9-2.4-1C16.6 2.4 12 2.4 12 2.4h0s-4.6 0-8.2.4c-.5.1-1.5.1-2.4 1-.7.7-.9 2.4-.9 2.4S0 8.2 0 10.1v1.8c0 2 .2 3.9.2 3.9s.2 1.7.9 2.4c.9.9 2.2.8 2.8.9 2 .2 8.1.4 8.1.4s4.6 0 8.2-.4c.5-.1 1.5-.1 2.4-1 .7-.7.9-2.4.9-2.4s.2-1.9.2-3.9v-1.8c0-1.9-.2-3.9-.2-3.9ZM9.6 14.7V7.7l6.4 3.5-6.4 3.5Z"/></svg>
            </a>
          </div>
        </div>
        <div>
          <div class="text-white font-semibold">Contact us</div>
          <div class="mt-4 rounded-xl border border-white/10 p-4">
            <div class="flex items-start gap-3"><span>📍</span><span>Niboye, Kicukiro, Kigali, Rwanda</span></div>
            <div class="mt-3 flex items-start gap-3"><span>📞</span><span>+250 783 323 024</span></div>
            <div class="mt-3 flex items-start gap-3"><span>✉️</span><span>innocent250@gmail.com</span></div>
          </div>
        </div>
      </div>
      <div class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6 text-sm text-gray-400 flex flex-col sm:flex-row items-center justify-between gap-3">
          <p>&copy; <span id="year"></span> Think Africa. All rights reserved.</p>
          <p>Kigali, Rwanda • Pan‑African Impact</p>
        </div>
      </div>
    </footer>

    <!-- WhatsApp Floating Button with label -->
    <a href="https://wa.me/250783323024?text=Hello%20Think%20Africa%2C%20I%27d%20like%20to%20learn%20more." target="_blank" rel="noopener" class="fixed bottom-6 right-6 z-40 inline-flex items-center gap-2 rounded-full bg-green-500 hover:bg-green-600 text-white shadow-lg px-4 h-14">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-7 h-7 fill-current"><path d="M19.11 17.39c-.3-.14-1.77-.87-2.04-.97-.27-.1-.47-.14-.66.14-.2.28-.76.97-.93 1.17-.17.2-.34.21-.64.07-.3-.14-1.26-.46-2.4-1.48-.89-.79-1.49-1.76-1.66-2.06-.17-.3-.02-.46.13-.6.13-.13.3-.34.45-.51.15-.17.2-.28.3-.47.1-.2.05-.35-.02-.49-.07-.14-.66-1.6-.9-2.19-.24-.59-.48-.51-.66-.52-.17-.01-.37-.01-.57-.01-.2 0-.52.07-.79.35-.27.28-1.04 1.02-1.04 2.49 0 1.47 1.07 2.89 1.22 3.09.15.2 2.1 3.21 5.09 4.5.71.31 1.26.5 1.69.64.71.23 1.36.2 1.87.12.57-.08 1.77-.72 2.02-1.41.25-.69.25-1.28.17-1.41-.07-.13-.27-.2-.57-.34z"/><path d="M26.68 5.32C23.75 2.39 19.98.86 16 .86 8.28.86 2 7.14 2 14.86c0 2.25.59 4.46 1.72 6.41L2 30l8.9-1.65c1.87 1.02 3.98 1.56 6.12 1.56 7.72 0 14-6.28 14-14 0-3.98-1.53-7.75-4.34-10.59z"/></svg>
      <span class="pr-2 font-medium">Chat with us</span>
    </a>

    <!-- Toast for success -->
    @if(session('success'))
      <div id="toast" class="fixed bottom-4 right-4 z-50 rounded-md bg-emerald-600 text-white px-4 py-3 shadow">
        {{ session('success') }}
      </div>
    @endif

    <script>
      document.getElementById('year').textContent = new Date().getFullYear();

      // Hero slider images
      const slides = [
        'https://images.unsplash.com/photo-1553729459-efe14ef6055d?q=80&w=1920&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1920&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=1920&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1518183214770-9cffbec72538?q=80&w=1920&auto=format&fit=crop'
      ];
      let slideIdx = 0;
      const hero = document.getElementById('hero-slide');
      function setSlide(i){
        if (!hero) return;
        hero.style.backgroundImage = `url('${slides[i]}')`;
        hero.style.transition = 'background-image 800ms ease-in-out';
      }
      setSlide(slideIdx);
      setInterval(()=>{ slideIdx = (slideIdx + 1) % slides.length; setSlide(slideIdx); }, 5000);

      // Modal toggle
      const openers = document.querySelectorAll('[data-modal-open]');
      openers.forEach(btn => {
        btn.addEventListener('click', () => {
          const id = btn.getAttribute('data-modal-open');
          const modal = document.querySelector(`[data-modal-id="${id}"]`);
          if (modal) modal.classList.remove('hidden');
        });
      });
      document.querySelectorAll('[data-modal-id]').forEach(modal => {
        modal.addEventListener('click', (e) => {
          if (e.target === modal) modal.classList.add('hidden');
        });
        modal.querySelectorAll('[data-modal-close]').forEach(c => c.addEventListener('click', ()=> modal.classList.add('hidden')));
      });

      // Auto-hide toast
      const toast = document.getElementById('toast');
      if (toast) setTimeout(() => toast.remove(), 4000);

      // Fade-in on scroll
      const fades = document.querySelectorAll('[data-fade]');
      const obs = new IntersectionObserver((entries)=>{
        entries.forEach(e=>{
          if(e.isIntersecting){
            e.target.classList.remove('opacity-0');
            e.target.classList.remove('translate-y-3');
            obs.unobserve(e.target);
          }
        });
      }, { threshold: 0.15 });
      fades.forEach(el=> obs.observe(el));

      // Appointment modal open/close
      const apptModal = document.querySelector('[data-appointment-modal]');
      const apptService = apptModal ? apptModal.querySelector('[data-appointment-service]') : null;
      const successModal = document.querySelector('[data-success-modal]');
      const successText = successModal ? successModal.querySelector('[data-success-text]') : null;
      document.querySelectorAll('[data-appointment-open]').forEach(btn => btn.addEventListener('click', ()=>{ if(apptModal) apptModal.classList.remove('hidden'); }));
      document.querySelectorAll('[data-appointment-close]').forEach(btn => btn.addEventListener('click', ()=>{ if(apptModal) apptModal.classList.add('hidden'); }));

      // AJAX submit for appointment form to appointments.store
      const apptForm = document.getElementById('appointmentForm');
      if (apptForm){
        apptForm.addEventListener('submit', async (e)=>{
          e.preventDefault();
          const fd = new FormData(apptForm);
          // Validate preferred_date is not in the past
          const pd = fd.get('preferred_date');
          if (pd){
            const today = new Date();
            const minStr = `${today.getFullYear()}-${String(today.getMonth()+1).padStart(2,'0')}-${String(today.getDate()).padStart(2,'0')}`;
            if (pd < minStr){
              const err = document.createElement('div');
              err.textContent = 'Please choose a date today or in the future.';
              err.className = 'fixed bottom-4 right-4 z-50 rounded-md bg-red-600 text-white px-4 py-3 shadow';
              document.body.appendChild(err);
              setTimeout(()=> err.remove(), 4000);
              return;
            }
          }
          // keep service, preferred_date, preferred_time, message as-is for backend
          const token = fd.get('_token');
          const btn = apptForm.querySelector('[data-submit-btn]');
          const prev = btn ? btn.textContent : '';
          if (btn){ btn.disabled = true; btn.textContent = 'Submitting...'; btn.classList.add('opacity-80'); }
          try {
            const res = await fetch(apptForm.action, {
              method: 'POST',
              headers: {
                'X-CSRF-TOKEN': token,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
              },
              body: fd,
              redirect: 'follow',
              credentials: 'same-origin'
            });
            if (res.ok || res.redirected || (res.status && res.status < 400)){
              if (apptModal) apptModal.classList.add('hidden');
              apptForm.reset();
              const showSuccess = (el)=>{
                try { el.classList.remove('hidden'); } catch(_) { el.style.display = 'block'; }
                el.style.zIndex = '1000';
                const bd = el.querySelector('[data-success-backdrop]');
                const pn = el.querySelector('[data-success-panel]');
                requestAnimationFrame(()=>{
                  if (bd) bd.classList.remove('opacity-0');
                  if (pn){ pn.classList.remove('opacity-0','scale-95','translate-y-2'); }
                });
                setTimeout(()=>{
                  if (bd) bd.classList.add('opacity-0');
                  if (pn){ pn.classList.add('opacity-0','scale-95','translate-y-2'); }
                  setTimeout(()=>{ try { el.classList.add('hidden'); } catch(_) { el.style.display = 'none'; } }, 280);
                }, 3000);
              };
              if (successModal){
                if (successText) successText.textContent = 'Your appointment request has been submitted. We will get back to you soon.';
                showSuccess(successModal);
              } else {
                // Fallback lightweight popup
                const wrap = document.createElement('div');
                wrap.className = 'fixed inset-0 z-[1000]';
                wrap.innerHTML = `
                  <div class="absolute inset-0 bg-black/60"></div>
                  <div class="relative mx-4 sm:mx-auto mt-24 max-w-md rounded-2xl bg-white shadow-2xl ring-1 ring-black/10">
                    <div class="px-6 pt-5 pb-4 bg-gradient-to-r from-emerald-600 to-green-600 text-white rounded-t-2xl font-semibold">Success</div>
                    <div class="p-6 text-gray-800">Your appointment request has been submitted. We will get back to you soon.</div>
                  </div>`;
                document.body.appendChild(wrap);
                setTimeout(()=>{ wrap.remove(); }, 3000);
              }
            } else {
              const err = document.createElement('div');
              err.textContent = 'Failed to submit. Please try again.';
              err.className = 'fixed bottom-4 right-4 z-50 rounded-md bg-red-600 text-white px-4 py-3 shadow';
              document.body.appendChild(err);
              setTimeout(()=> err.remove(), 4000);
            }
          } catch (e) {
            const err = document.createElement('div');
            err.textContent = 'Network error. Please check your connection and try again.';
            err.className = 'fixed bottom-4 right-4 z-50 rounded-md bg-red-600 text-white px-4 py-3 shadow';
            document.body.appendChild(err);
            setTimeout(()=> err.remove(), 4000);
          }
          if (btn){ btn.disabled = false; btn.textContent = prev; btn.classList.remove('opacity-80'); }
        });
      }


      // Book this service from modal without reload -> open appointment modal and preselect
      function smoothScrollTo(el){
        const y = el.getBoundingClientRect().top + window.pageYOffset - 100;
        window.scrollTo({ top: y, behavior: 'smooth' });
      }
      document.querySelectorAll('[data-book-service]').forEach(btn => {
        btn.addEventListener('click', () => {
          const serviceName = btn.getAttribute('data-book-service');
          if (apptModal){
            apptModal.classList.remove('hidden');
            if (apptService){
              let matched = false;
              apptService.querySelectorAll('option').forEach(opt => {
                if (opt.value.toLowerCase() === serviceName.toLowerCase() || opt.textContent.trim().toLowerCase() === serviceName.toLowerCase()) {
                  opt.selected = true; matched = true;
                }
              });
              if (!matched && apptService.options.length > 0) apptService.selectedIndex = 0;
            }
          }
          const modal = btn.closest('[data-modal-id]');
          if (modal) modal.classList.add('hidden');
          // no scroll
        });
      });

      // Ensure sticky action bar stays above content on all browsers
      const stickyBars = document.querySelectorAll('#appointmentForm .sticky');
      stickyBars.forEach(el => { el.style.zIndex = '10'; });

      // WhatsApp / WhatsApp Business opener with fallbacks
      function openWhatsApp(phoneRaw, text){
        const phone = phoneRaw.replace(/\D/g, '');
        const encoded = encodeURIComponent(text || '');
        const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent);
        const waBusinessScheme = isIOS ? `whatsapp-business://send?phone=${phone}&text=${encoded}` : `intent://send?phone=${phone}&text=${encoded}#Intent;package=com.whatsapp.w4b;scheme=smsto;end`;
        const waPersonalScheme = isIOS ? `whatsapp://send?phone=${phone}&text=${encoded}` : `intent://send?phone=${phone}&text=${encoded}#Intent;package=com.whatsapp;scheme=smsto;end`;
        const waWeb = `https://wa.me/${phone}?text=${encoded}`;

        let opened = false;
        const tryOpen = (url, next) => {
          const win = window.open(url, '_self');
          opened = true;
          // Some browsers block or ignore; chain fallback via timeout
          setTimeout(()=>{ if (!document.hidden && typeof next === 'function') next(); }, 700);
        };
        // Prefer Business app
        tryOpen(waBusinessScheme, ()=> tryOpen(waPersonalScheme, ()=> window.location.href = waWeb));
      }

      const waBtn = document.querySelector('[data-whatsapp-phone]');
      if (waBtn){
        waBtn.addEventListener('click', (e)=>{
          e.preventDefault();
          const phone = waBtn.getAttribute('data-whatsapp-phone') || '';
          const text = waBtn.getAttribute('data-whatsapp-text') || '';
          openWhatsApp(phone, text);
        });
      }

      // Set min date on preferred_date to disable past dates
      if (apptModal){
        const dateInput = apptModal.querySelector('input[name="preferred_date"]');
        if (dateInput){
          const today = new Date();
          const minStr = `${today.getFullYear()}-${String(today.getMonth()+1).padStart(2,'0')}-${String(today.getDate()).padStart(2,'0')}`;
          dateInput.setAttribute('min', minStr);
          dateInput.addEventListener('change', ()=>{ if (dateInput.value && dateInput.value < minStr) dateInput.value = minStr; });
        }
      }

      // Success modal close
      if (successModal){
        const bd = successModal.querySelector('[data-success-backdrop]');
        const pn = successModal.querySelector('[data-success-panel]');
        successModal.addEventListener('click', (e)=>{ if (e.target === successModal || e.target === bd) {
          if (bd) bd.classList.add('opacity-0');
          if (pn){ pn.classList.add('opacity-0','scale-95','translate-y-2'); }
          setTimeout(()=> successModal.classList.add('hidden'), 280);
        }});
        const okBtn = successModal.querySelector('[data-success-close]');
        if (okBtn) okBtn.addEventListener('click', ()=>{
          if (bd) bd.classList.add('opacity-0');
          if (pn){ pn.classList.add('opacity-0','scale-95','translate-y-2'); }
          setTimeout(()=> successModal.classList.add('hidden'), 280);
        });
      }
    </script>
  </body>
</html>

