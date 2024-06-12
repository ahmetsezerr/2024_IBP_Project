<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sezer NFT</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

<div class="btn--animateglowPink m-1 p-1.5 min-h-svh overflow-hidden" x-data="{ openError: false }">
	<div class="min-h-svh max-w-[1440px] mx-auto">
		<nav class="max-w-[1240px] mx-auto" x-data="{ openNav: false }">
			<div class="px-4 pt-4 pt-0 min-[845px]:pt-9 transition-all">
				<div class="flex justify-between">
					<div class="flex">
						<div class="logo flex flex-shrink-0 items-center text-white hover:text-[#E730CA] transition-colors">
							<svg class="hidden md:block logo-svg transform hover: transition-transform duration-700" style="transform-style: preserve-3d" width="52" height="44" viewBox="0 0 52 44" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22.8601 0.415039L51.0641 28.5049V43.5849H37.9022V33.9259L17.4173 13.5237H13.1619V43.5849H0V0.415039H22.8601ZM37.9022 15.3963V0.415039H51.0641V15.3963H37.9022Z" fill="currentColor" />
							</svg>

							<svg class="md:hidden" width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M16.5639 0L37 20.1712V31H27.4632V24.064L12.6202 9.41322H9.53683V31H0V0H16.5639ZM27.4632 10.758V0H37V10.758H27.4632Z" fill="currentColor" />
							</svg>
						</div>
					</div>

					<div class="hidden min-[845px]:flex sm:space-x-8">
						<a href="#" class="relative text-[#E730CA] hover:text-[#E730CA] inline-flex items-center font-bold before:content-[''] before:absolute before:bottom-2.5 before:left-1/2 before:transform before:-translate-x-1/2 before:h-[1.5px] before:w-full before:bg-white" aria-current="page">Home</a>
						<a href="{{route("login")}}" class="relative text-white hover:text-[#E730CA] inline-flex items-center font-bold before:content-[''] before:absolute before:bottom-2.5 before:left-1/2 before:transform before:-translate-x-1/2 before:h-[1.5px] before:w-0 before:bg-white before:transition-all before:hover:w-full before:duration-500">Login</a>
						<a href="{{route("register")}}" class="relative text-white hover:text-[#E730CA] inline-flex items-center font-bold before:content-[''] before:absolute before:bottom-2.5 before:left-1/2 before:transform before:-translate-x-1/2 before:h-[1.5px] before:w-0 before:bg-white before:transition-all before:hover:w-full before:duration-500">Sign In</a>
					</div>

					<div class="flex items-center space-x-7">
						<!-- <a class="relative group hidden min-[845px]:flex bg-transparent min-w-44 w-44 h-12 rounded-lg overflow-hidden border border-[#E730CA] font-semibold text-[#E730CA] sm:hover:text-white sm:hover:border-[#561950] transition-all duration-700" style="will-change: transform" id="cta">
							<span x-on:mouseover="openError = true" class="flex justify-center items-center h-full w-full sm:transform sm:group-hover:-translate-x-3.5 transition-transform cursor-pointer duration-700">Connect Wallet</span>
							<span class="absolute top-0 -right-8 sm:group-hover:right-0 h-full flex justify-center items-center px-1.5 bg-[#E730CA] transition-all cursor-pointer duration-700">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#131313" class="w-[18px] h-4">
									<path d="M2.273 5.625A4.483 4.483 0 0 1 5.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 3H5.25a3 3 0 0 0-2.977 2.625ZM2.273 8.625A4.483 4.483 0 0 1 5.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 6H5.25a3 3 0 0 0-2.977 2.625ZM5.25 9a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h13.5a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3H15a.75.75 0 0 0-.75.75 2.25 2.25 0 0 1-4.5 0A.75.75 0 0 0 9 9H5.25Z" />
								</svg>
							</span>
						</a> -->

						<div class="hidden min-[845px]:flex justify-center">
							<div x-data="{
												open: false,
												toggle() {
														if (this.open) {
																return this.close()
														}

														this.$refs.button.focus()

														this.open = true
												},
												close(focusAfter) {
														if (! this.open) return

														this.open = false

														focusAfter && focusAfter.focus()
												},
												items: [
													{
														id: 1,
														text: 'NEW: <a href=\'#\' class=\'text-[#e730ca] font-medium\'>collections</a> releases soon'
													},
													{
														id: 2,
														text: 'UPDATE: <a href=\'#\' class=\'text-[#e730ca] font-medium\'>İstanbul Remaked</a>'
													},
													{
														id: 3,
														text: 'NEW: <a href=\'#\' class=\'text-[#e730ca] font-medium\'>Karabük</a> is hot 🔥'
													},
												],
												get count() {
														return this.items.length;
												},
												removeItemFromItems(id) {
														this.items = this.items.filter(item => item.id !== id);
												}
										}" x-on:keydown.escape.prevent.stop="close($refs.button)" x-on:focusin.window="! $refs.panel.contains($event.target) && close()" x-id="['dropdown-button']" class="relative">
								<!-- Button -->
								<button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')" type="button" class="flex hover:text-white transition-colors" :class="count > 0 ? 'text-[#e730ca] max-w-[46px]' : 'text-white/20 max-w-[28px]'">
									<svg class="bell-con" fill="currentColor" viewBox="0 0 448 512" width="50" title="bell">
										<path d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z" />
									</svg>
									<span x-show="count > 0" class="flex justify-center items-center text-xs notification-count text-white bg-[#e730ca] rounded-full min-h-[18px] min-w-[18px] max-h-[18px] max-w-[18px]" x-text="count"></span>
								</button>

								<!-- Panel -->
								<div x-ref="panel" x-show="open" x-transition.origin.top.left x-on:click.outside="close($refs.button)" :id="$id('dropdown-button')" style="display: none;" class="absolute right-0 top-[42px] mt-2 min-w-[262px] rounded-md bg-white z-50">
									<template x-for="item in items" :key="item.id">
										<div class="flex items-center justify-between gap-1 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm disabled:text-gray-500 group">
											<span x-html="item.text">
											</span>
											<svg x-on:click="removeItemFromItems(item.id)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 group-hover:text-gray-300 text-transparent hover:stroke-[#e730ca] stroke-transparent transition-colors cursor-pointer">
												<path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
											</svg>
										</div>
									</template>
								</div>
							</div>
						</div>
					</div>

					<div class="-mr-2 flex items-center min-[845px]:hidden">
						<button type="button" x-on:click="openNav = true" class="relative inline-flex items-center justify-center p-1 text-white hover:text-[#E730CA] focus:outline-none focus:ring-0 focus:ring-transparent focus:ring-offset-0 transition-colors" aria-controls="mobile-menu" aria-expanded="false">
							<span class="absolute -inset-0.5"></span>
							<span class="sr-only">Open main menu</span>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
							</svg>
						</button>
					</div>
				</div>
			</div>

			<div x-cloak x-show="openNav" class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
				<div x-cloak x-show="openNav" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-900/80"></div>

				<div x-cloak x-show="openNav" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="fixed inset-0 flex">
					<div x-cloak x-show="openNav" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="relative mr-16 flex w-full max-w-xs flex-1">

						<div class="absolute left-full top-0 flex w-16 justify-center pt-5">
							<button type="button" x-on:click="openNav = false" class="-m-2.5 p-2.5">
								<span class="sr-only">Close sidebar</span>
								<svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
								</svg>
							</button>
						</div>

						<div class="flex grow flex-col gap-y-5 overflow-y-auto bg-[#131313] px-6 pb-2">
							<div class="flex h-16 shrink-0 items-center">
								<svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M16.5639 0L37 20.1712V31H27.4632V24.064L12.6202 9.41322H9.53683V31H0V0H16.5639ZM27.4632 10.758V0H37V10.758H27.4632Z" fill="#FFFFFF" />
								</svg>
							</div>
							<nav class="flex flex-1 flex-col">
								<ul role="list" class="flex flex-1 flex-col gap-y-7">
									<li>
										<ul role="list" class="-mx-2 space-y-1">
											<li>
												<a href="#" class="bg-[#E730CA]/80 text-white group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
													Home
												</a>
											</li>
											<li>
												<a href="#" class="text-gray-300 hover:text-white hover:bg-[#E730CA]/80 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
													Marketplace
												</a>
											</li>
											<li>
												<a href="#" class="text-gray-300 hover:text-white hover:bg-[#E730CA]/80 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
													Collections
												</a>
											</li>
											<li>
												<a href="#" class="text-gray-300 hover:text-white hover:bg-[#E730CA]/80 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
													Community
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="pt-20 lg:pt-40 xl:pt-60">
			<!-- header -->
			<header>
				<div class="relative isolate">
					<div class="mx-auto max-w-7xl px-6 space-y-20 sm:space-y-52 lg:space-y-0 lg:flex lg:items-center lg:gap-x-10 lg:pl-8 lg:pr-20">
						<div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
							<div class="flex">
								<div x-on:mouseover="openError = true" class="relative flex items-center gap-x-4 rounded-full px-4 py-1 leading-6 text-sm xl:text-base text-white xl:font-semibold border border-[#CACACA]/60 bg-transparent hover:bg-[#E730CA] hover:border-transparent transition-colors">
									<a href="#" class="flex items-center gap-x-1">
										Now available on App Store!
										<svg class="-mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
										</svg>
									</a>
								</div>
							</div>
							<h1 class="mt-10 max-w-lg text-4xl sm:text-7xl lg:text-6xl font-semibold text-white xl:text-7xl tracking-tight">Build your wallet with <span class="text-[#FF33DE]">Sezer NFT!</span></h1>
							<p class="mt-6 xl:text-lg font-medium leading-8 text-white max-w-[553px]">Buy and Sell your favorite NFT here from the top artist in the world, more than 10.000 collection are available just for you</p>
							<div class="mt-10 flex items-center gap-x-6">
								<!-- <a href="#" x-on:mouseover="openError = true" class="rounded-xl bg-[#E730CA] w-32 xl:w-40 py-2.5 font-semibold text-sm xl:text-base text-white text-center border border-transparent hover:border-[#E730CA] hover:bg-transparent focus-visible:outline-none focus-visible:outline-0 focus-visible:outline-offset-0 focus-visible:outline-transparent transition-colors">Find NFT</a>
								<a href="#" x-on:mouseover="openError = true" class="border border-[#E730CA] hover:border-[#E730CA]/30 bg-transparent hover:bg-[#E730CA]/30 rounded-xl w-32 xl:w-40 py-2.5 font-semibold leading-6 text-sm xl:text-base text-[#E730CA] hover:text-white text-center transition-colors">Create NFT</a> -->
							</div>
						</div>
						<div class="relative flex justify-center items-center mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
							<svg class="mx-auto max-w-md max-h-md lg:max-w-full lg:min-w-[445px] lg:max-h-full lg:min-h-[445px] text-gray-300" aria-hidden="true" viewBox="0 0 580 580" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="290" cy="290" r="289.5" stroke="currentColor" stroke-opacity="0.2" />
								<circle cx="290" cy="290" r="231.5" stroke="currentColor" stroke-opacity="0.2" />
							</svg>

							<div class="circle w-full h-full max-w-md max-h-md lg:max-w-full lg:min-w-[445px] lg:max-h-full lg:min-h-[445px]" style="--total: 12">
								<div class="stat" style="--i:3">
									<div class="flex items-end mr-[55px] 2xl:mr-0 w-[85px] sm:w-[175px] h-[126px] sm:h-[225px] 2xl:w-[200px] 2xl:h-[250px] rounded-md sm:rounded-2xl 2xl:rounded-3xl bg-center bg-cover bg-no-repeat scale-[0.6] sm:scale-100 overflow-hidden transition-all" style="background-image: url('https://coinstats.app/blog/wp-content/uploads/2023/06/The-Rise-of-NFTs-How-Will-AI-Impact-the-NFT-Art-Ecosystem-copy-1-1200x900.webp'); animation: float 6s ease-in-out infinite;">
										<div class="hidden sm:block flex-1 bg-white h-[95px] px-4 glass">
											<h4 class="text-xs font-bold text-[#161616] py-4 truncate max-w-[145px] 2xl:max-w-none">İstanbul</h4>
											<div class="flex items-center justify-between font-bold text-[0.625rem]">
												<div class="flex flex-col">
													<span class="text-[#646464]">Curent Bid</span>
													<span class="flex items-center space-x-1 text-[#161616]">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C3.5815 16 0 12.4185 0 8C0 3.5815 3.5815 0 8 0C12.4185 0 16 3.5815 16 8C16 12.4185 12.4185 16 8 16ZM11.997 8.1095L8.249 2L4.5 8.11L8.249 10.2865L11.997 8.1095ZM12 8.808L8.249 10.9835L4.5 8.8085L8.249 13.9975L12 8.808Z" fill="#F1F1F1" />
															<path d="M8.24902 2V6.435L11.9975 8.11L8.24902 2ZM8.24902 10.984V13.9975L12 8.808L8.24902 10.984Z" fill="blue" fill-opacity="0.298" />
															<path d="M8.24902 10.2865L11.9975 8.11003L8.24902 6.43604V10.2865Z" fill="blue" fill-opacity="0.801" />
															<path d="M4.5 8.11003L8.249 10.2865V6.43604L4.5 8.11003Z" fill="blue" fill-opacity="0.298" />
														</svg>
														<span>0.2 ETH</span>
													</span>
												</div>
												<div>
													<button type="button" class="text-[#161616] hover:text-[#E730CA] border rounded-full border-[#161616] hover:border-[#E730CA] w-12 h-6 transition-colors">
														Bid
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="stat" style="--i:7">
									<div class="flex items-end mr-[55px] 2xl:mr-0 w-[85px] sm:w-[175px] h-[126px] sm:h-[225px] 2xl:w-[200px] 2xl:h-[250px] rounded-md sm:rounded-2xl 2xl:rounded-3xl bg-center bg-cover bg-no-repeat scale-[0.6] sm:scale-100 overflow-hidden transition-all" style="background-image: url('https://uk.sganalytics.com/assets/uploads/fcimages/images/NFT%20digital%20art.jpg'); animation: float 8s ease-in-out infinite;">
										<div class="hidden sm:block flex-1 bg-white h-[95px] px-4 glass">
											<h4 class="text-xs font-bold text-[#161616] py-4 truncate max-w-[145px] 2xl:max-w-none">Karabük</h4>
											<div class="flex items-center justify-between font-bold text-[0.625rem]">
												<div class="flex flex-col">
													<span class="text-[#646464]">Curent Bid</span>
													<span class="flex items-center space-x-1 text-[#161616]">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C3.5815 16 0 12.4185 0 8C0 3.5815 3.5815 0 8 0C12.4185 0 16 3.5815 16 8C16 12.4185 12.4185 16 8 16ZM11.997 8.1095L8.249 2L4.5 8.11L8.249 10.2865L11.997 8.1095ZM12 8.808L8.249 10.9835L4.5 8.8085L8.249 13.9975L12 8.808Z" fill="#F1F1F1" />
															<path d="M8.24902 2V6.435L11.9975 8.11L8.24902 2ZM8.24902 10.984V13.9975L12 8.808L8.24902 10.984Z" fill="blue" fill-opacity="0.298" />
															<path d="M8.24902 10.2865L11.9975 8.11003L8.24902 6.43604V10.2865Z" fill="blue" fill-opacity="0.801" />
															<path d="M4.5 8.11003L8.249 10.2865V6.43604L4.5 8.11003Z" fill="blue" fill-opacity="0.298" />
														</svg>
														<span>0.2 ETH</span>
													</span>
												</div>
												<div>
													<button type="button" class="text-[#161616] hover:text-[#E730CA] border rounded-full border-[#161616] hover:border-[#E730CA] w-12 h-6 transition-colors">
														Bid
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="stat" style="--i:11">
									<div class="flex items-end mr-[55px] 2xl:mr-0 w-[85px] sm:w-[175px] h-[126px] sm:h-[225px] 2xl:w-[200px] 2xl:h-[250px] rounded-md sm:rounded-2xl 2xl:rounded-3xl bg-center bg-cover bg-no-repeat overflow-hidden transition-all" style="background-image: url('https://99designs-blog.imgix.net/blog/wp-content/uploads/2021/05/merlin_184196631_939fb22d-b909-4205-99d9-b464fb961d32-superJumbo.jpeg?auto=format&q=60&fit=max&w=930'); animation: floatdown 6.5s ease-in-out infinite;">
										<div class="hidden sm:block flex-1 bg-white h-[95px] px-4 glass">
											<h4 class="text-xs font-bold text-[#161616] py-4 truncate max-w-[145px] 2xl:max-w-none">Sakarya</h4>
											<div class="flex items-center justify-between font-bold text-[0.625rem]">
												<div class="flex flex-col">
													<span class="text-[#646464]">Curent Bid</span>
													<span class="flex items-center space-x-1 text-[#161616]">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C3.5815 16 0 12.4185 0 8C0 3.5815 3.5815 0 8 0C12.4185 0 16 3.5815 16 8C16 12.4185 12.4185 16 8 16ZM11.997 8.1095L8.249 2L4.5 8.11L8.249 10.2865L11.997 8.1095ZM12 8.808L8.249 10.9835L4.5 8.8085L8.249 13.9975L12 8.808Z" fill="#F1F1F1" />
															<path d="M8.24902 2V6.435L11.9975 8.11L8.24902 2ZM8.24902 10.984V13.9975L12 8.808L8.24902 10.984Z" fill="blue" fill-opacity="0.298" />
															<path d="M8.24902 10.2865L11.9975 8.11003L8.24902 6.43604V10.2865Z" fill="blue" fill-opacity="0.801" />
															<path d="M4.5 8.11003L8.249 10.2865V6.43604L4.5 8.11003Z" fill="blue" fill-opacity="0.298" />
														</svg>
														<span>0.2 ETH</span>
													</span>
												</div>
												<div>
													<button type="button" class="text-[#161616] hover:text-[#E730CA] border rounded-full border-[#161616] hover:border-[#E730CA] w-12 h-6 transition-colors">
														Bid
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</header>
			<main class="max-w-[1240px] mx-auto pb-32">
				<!-- Logo cloud -->
				<section class="my-20 sm:my-60">
					<div class="grid grid-cols-4 items-center gap-x-8 gap-y-12 sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:grid-cols-5">
						<img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-400.svg" alt="Transistor" width="158" height="48">
						<img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-400.svg" alt="Reform" width="158" height="48">
						<img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-400.svg" alt="Tuple" width="158" height="48">
						<img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-400.svg" alt="SavvyCal" width="158" height="48">
						<img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-400.svg" alt="Statamic" width="158" height="48">
					</div>
				</section>

				<!-- Grid tabs -->
				<!-- Tabs -->
				<section x-data="{
        selectedId: null,
        init() {
            // Set the first available tab on the page on page load.
            this.$nextTick(() => this.select(this.$id('tab', 1)))
        },
        select(id) {
            this.selectedId = id
        },
        isSelected(id) {
            return this.selectedId === id
        },
        whichChild(el, parent) {
            return Array.from(parent.children).indexOf(el) + 1
        }
    }" x-id="['tab']" class="px-6 lg:px-8">
					<h2 class="my-10 text-2xl sm:text-[2.5rem] font-semibold tracking-tight text-white">Hot Drops <span class="text-[#FF33DE]">For You! 🔥</span></h2>
					<!-- Tab List -->
					<ul x-ref="tablist" @keydown.right.prevent.stop="$focus.wrap().next()" @keydown.home.prevent.stop="$focus.first()" @keydown.page-up.prevent.stop="$focus.first()" @keydown.left.prevent.stop="$focus.wrap().prev()" @keydown.end.prevent.stop="$focus.last()" @keydown.page-down.prevent.stop="$focus.last()" role="tablist" class="mb-6 gap-y-2 gap-x-8 flex flex-wrap max-w-screen-xl mx-auto">
						<!-- Tab -->
						<li>
							<button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))" @click="select($el.id)" @mousedown.prevent @focus="select($el.id)" type="button" :tabindex="isSelected($el.id) ? 0 : -1" :aria-selected="isSelected($el.id)" :class="isSelected($el.id) ? 'bg-[#E730CA] text-white' : 'bg-transparent text-[#E730CA]'" class="rounded-xl px-4 py-2 font-semibold text-sm xl:text-base text-center hover:text-white border border-[#E730CA] hover:bg-[#E730CA] focus-visible:outline-none focus-visible:outline-0 focus-visible:outline-offset-0 focus-visible:outline-transparent transition-colors" role="tab">All</button>
						</li>

						<li>
							<button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))" @click="select($el.id)" @mousedown.prevent @focus="select($el.id)" type="button" :tabindex="isSelected($el.id) ? 0 : -1" :aria-selected="isSelected($el.id)" :class="isSelected($el.id) ? 'bg-[#E730CA] text-white' : 'bg-transparent text-[#E730CA]'" class="rounded-xl px-4 py-2 font-semibold text-sm xl:text-base text-center hover:text-white border border-[#E730CA] hover:bg-[#E730CA] focus-visible:outline-none focus-visible:outline-0 focus-visible:outline-offset-0 focus-visible:outline-transparent transition-colors" role="tab">Art</button>
						</li>

						<li>
							<button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))" @click="select($el.id)" @mousedown.prevent @focus="select($el.id)" type="button" :tabindex="isSelected($el.id) ? 0 : -1" :aria-selected="isSelected($el.id)" :class="isSelected($el.id) ? 'bg-[#E730CA] text-white' : 'bg-transparent text-[#E730CA]'" class="rounded-xl px-4 py-2 font-semibold text-sm xl:text-base text-center hover:text-white border border-[#E730CA] hover:bg-[#E730CA] focus-visible:outline-none focus-visible:outline-0 focus-visible:outline-offset-0 focus-visible:outline-transparent transition-colors" role="tab">Music</button>
						</li>

						<li>
							<button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))" @click="select($el.id)" @mousedown.prevent @focus="select($el.id)" type="button" :tabindex="isSelected($el.id) ? 0 : -1" :aria-selected="isSelected($el.id)" :class="isSelected($el.id) ? 'bg-[#E730CA] text-white' : 'bg-transparent text-[#E730CA]'" class="rounded-xl px-4 py-2 font-semibold text-sm xl:text-base text-center hover:text-white border border-[#E730CA] hover:bg-[#E730CA] focus-visible:outline-none focus-visible:outline-0 focus-visible:outline-offset-0 focus-visible:outline-transparent transition-colors" role="tab">Science</button>
						</li>

						<li>
							<button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))" @click="select($el.id)" @mousedown.prevent @focus="select($el.id)" type="button" :tabindex="isSelected($el.id) ? 0 : -1" :aria-selected="isSelected($el.id)" :class="isSelected($el.id) ? 'bg-[#E730CA] text-white' : 'bg-transparent text-[#E730CA]'" class="rounded-xl px-4 py-2 font-semibold text-sm xl:text-base text-center hover:text-white border border-[#E730CA] hover:bg-[#E730CA] focus-visible:outline-none focus-visible:outline-0 focus-visible:outline-offset-0 focus-visible:outline-transparent transition-colors" role="tab">Sports</button>
						</li>

						<li>
							<button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))" @click="select($el.id)" @mousedown.prevent @focus="select($el.id)" type="button" :tabindex="isSelected($el.id) ? 0 : -1" :aria-selected="isSelected($el.id)" :class="isSelected($el.id) ? 'bg-[#E730CA] text-white' : 'bg-transparent text-[#E730CA]'" class="rounded-xl px-4 py-2 font-semibold text-sm xl:text-base text-center hover:text-white border border-[#E730CA] hover:bg-[#E730CA] focus-visible:outline-none focus-visible:outline-0 focus-visible:outline-offset-0 focus-visible:outline-transparent transition-colors" role="tab">Photography</button>
						</li>
					</ul>

					<!-- Panels -->
					<div role="tabpanels">
						<!-- Panel -->
						<section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))" :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel">
							<ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
								<template x-for="_ in Array.from({ length: 8 })">
									<li class="col-span-1 flex items-end w-full h-[315px] rounded-2xl 2xl:rounded-3xl bg-center bg-cover bg-no-repeat hover:scale-95 overflow-hidden transition-transform duration-300" style="background-image: url('https://cimg.co/news/100430/248406/polina-kondrashova-fhrwah2hmnm-unsplash.jpg');">
										<div class="block flex-1 bg-white h-[95px] px-4 glass">
											<h4 class="text-xs font-bold text-[#161616] py-4 truncate max-w-[90%] 2xl:max-w-none">Balistic Wave Collection #1</h4>
											<div class="flex items-center justify-between font-bold text-[0.625rem]">
												<div class="flex flex-col">
													<span class="text-[#646464]">Curent Bid</span>
													<span class="flex items-center space-x-1 text-[#161616]">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C3.5815 16 0 12.4185 0 8C0 3.5815 3.5815 0 8 0C12.4185 0 16 3.5815 16 8C16 12.4185 12.4185 16 8 16ZM11.997 8.1095L8.249 2L4.5 8.11L8.249 10.2865L11.997 8.1095ZM12 8.808L8.249 10.9835L4.5 8.8085L8.249 13.9975L12 8.808Z" fill="#F1F1F1" />
															<path d="M8.24902 2V6.435L11.9975 8.11L8.24902 2ZM8.24902 10.984V13.9975L12 8.808L8.24902 10.984Z" fill="blue" fill-opacity="0.298" />
															<path d="M8.24902 10.2865L11.9975 8.11003L8.24902 6.43604V10.2865Z" fill="blue" fill-opacity="0.801" />
															<path d="M4.5 8.11003L8.249 10.2865V6.43604L4.5 8.11003Z" fill="blue" fill-opacity="0.298" />
														</svg>
														<span>0.2 ETH</span>
													</span>
												</div>
												<div>
													<button type="button" class="text-[#161616] hover:text-[#E730CA] border rounded-full border-[#161616] hover:border-[#E730CA] w-12 h-6 transition-colors">
														Bid
													</button>
												</div>
											</div>
									</li>
								</template>
							</ul>
						</section>

						<section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))" :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel">
							<ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
								<template x-for="_ in Array.from({ length: 4 })">
									<li class="col-span-1 flex items-end w-full h-[315px] rounded-2xl 2xl:rounded-3xl bg-center bg-cover bg-no-repeat hover:scale-95 overflow-hidden transition-transform duration-300" style="background-image: url('https://510411.fs1.hubspotusercontent-na1.net/hubfs/510411/aeforia---prelude.jpg');">
										<div class="block flex-1 bg-white h-[95px] px-4 glass">
											<h4 class="text-xs font-bold text-[#161616] py-4 truncate max-w-[90%] 2xl:max-w-none">Balistic Wave Collection #1</h4>
											<div class="flex items-center justify-between font-bold text-[0.625rem]">
												<div class="flex flex-col">
													<span class="text-[#646464]">Curent Bid</span>
													<span class="flex items-center space-x-1 text-[#161616]">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C3.5815 16 0 12.4185 0 8C0 3.5815 3.5815 0 8 0C12.4185 0 16 3.5815 16 8C16 12.4185 12.4185 16 8 16ZM11.997 8.1095L8.249 2L4.5 8.11L8.249 10.2865L11.997 8.1095ZM12 8.808L8.249 10.9835L4.5 8.8085L8.249 13.9975L12 8.808Z" fill="#F1F1F1" />
															<path d="M8.24902 2V6.435L11.9975 8.11L8.24902 2ZM8.24902 10.984V13.9975L12 8.808L8.24902 10.984Z" fill="blue" fill-opacity="0.298" />
															<path d="M8.24902 10.2865L11.9975 8.11003L8.24902 6.43604V10.2865Z" fill="blue" fill-opacity="0.801" />
															<path d="M4.5 8.11003L8.249 10.2865V6.43604L4.5 8.11003Z" fill="blue" fill-opacity="0.298" />
														</svg>
														<span>0.2 ETH</span>
													</span>
												</div>
												<div>
													<button type="button" class="text-[#161616] hover:text-[#E730CA] border rounded-full border-[#161616] hover:border-[#E730CA] w-12 h-6 transition-colors">
														Bid
													</button>
												</div>
											</div>
									</li>
								</template>
							</ul>
						</section>

						<section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))" :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel">
							<ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
								<template x-for="_ in Array.from({ length: 6 })">
									<li class="col-span-1 flex items-end w-full h-[315px] rounded-2xl 2xl:rounded-3xl bg-center bg-cover bg-no-repeat hover:scale-95 overflow-hidden transition-transform duration-300" style="background-image: url('https://www.todaynftnews.com/wp-content/uploads/2022/12/5-Dec-1-1.jpg');">
										<div class="block flex-1 bg-white h-[95px] px-4 glass">
											<h4 class="text-xs font-bold text-[#161616] py-4 truncate max-w-[90%] 2xl:max-w-none">Balistic Wave Collection #1</h4>
											<div class="flex items-center justify-between font-bold text-[0.625rem]">
												<div class="flex flex-col">
													<span class="text-[#646464]">Curent Bid</span>
													<span class="flex items-center space-x-1 text-[#161616]">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C3.5815 16 0 12.4185 0 8C0 3.5815 3.5815 0 8 0C12.4185 0 16 3.5815 16 8C16 12.4185 12.4185 16 8 16ZM11.997 8.1095L8.249 2L4.5 8.11L8.249 10.2865L11.997 8.1095ZM12 8.808L8.249 10.9835L4.5 8.8085L8.249 13.9975L12 8.808Z" fill="#F1F1F1" />
															<path d="M8.24902 2V6.435L11.9975 8.11L8.24902 2ZM8.24902 10.984V13.9975L12 8.808L8.24902 10.984Z" fill="blue" fill-opacity="0.298" />
															<path d="M8.24902 10.2865L11.9975 8.11003L8.24902 6.43604V10.2865Z" fill="blue" fill-opacity="0.801" />
															<path d="M4.5 8.11003L8.249 10.2865V6.43604L4.5 8.11003Z" fill="blue" fill-opacity="0.298" />
														</svg>
														<span>0.2 ETH</span>
													</span>
												</div>
												<div>
													<button type="button" class="text-[#161616] hover:text-[#E730CA] border rounded-full border-[#161616] hover:border-[#E730CA] w-12 h-6 transition-colors">
														Bid
													</button>
												</div>
											</div>
									</li>
								</template>
							</ul>
						</section>

						<section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))" :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel">
							<ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
								<template x-for="_ in Array.from({ length: 8 })">
									<li class="col-span-1 flex items-end w-full h-[315px] rounded-2xl 2xl:rounded-3xl bg-center bg-cover bg-no-repeat hover:scale-95 overflow-hidden transition-transform duration-300" style="background-image: url('https://miro.medium.com/v2/resize:fit:1358/0*PWtWYLkyR16QCPIk');">
										<div class="block flex-1 bg-white h-[95px] px-4 glass">
											<h4 class="text-xs font-bold text-[#161616] py-4 truncate max-w-[90%] 2xl:max-w-none">Balistic Wave Collection #1</h4>
											<div class="flex items-center justify-between font-bold text-[0.625rem]">
												<div class="flex flex-col">
													<span class="text-[#646464]">Curent Bid</span>
													<span class="flex items-center space-x-1 text-[#161616]">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C3.5815 16 0 12.4185 0 8C0 3.5815 3.5815 0 8 0C12.4185 0 16 3.5815 16 8C16 12.4185 12.4185 16 8 16ZM11.997 8.1095L8.249 2L4.5 8.11L8.249 10.2865L11.997 8.1095ZM12 8.808L8.249 10.9835L4.5 8.8085L8.249 13.9975L12 8.808Z" fill="#F1F1F1" />
															<path d="M8.24902 2V6.435L11.9975 8.11L8.24902 2ZM8.24902 10.984V13.9975L12 8.808L8.24902 10.984Z" fill="blue" fill-opacity="0.298" />
															<path d="M8.24902 10.2865L11.9975 8.11003L8.24902 6.43604V10.2865Z" fill="blue" fill-opacity="0.801" />
															<path d="M4.5 8.11003L8.249 10.2865V6.43604L4.5 8.11003Z" fill="blue" fill-opacity="0.298" />
														</svg>
														<span>0.2 ETH</span>
													</span>
												</div>
												<div>
													<button type="button" class="text-[#161616] hover:text-[#E730CA] border rounded-full border-[#161616] hover:border-[#E730CA] w-12 h-6 transition-colors">
														Bid
													</button>
												</div>
											</div>
									</li>
								</template>
							</ul>
						</section>

						<section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))" :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel">
							<ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
								<template x-for="_ in Array.from({ length: 3 })">
									<li class="col-span-1 flex items-end w-full h-[315px] rounded-2xl 2xl:rounded-3xl bg-center bg-cover bg-no-repeat hover:scale-95 overflow-hidden transition-transform duration-300" style="background-image: url('https://hawk.live/storage/post-images/nba-nft-in-sports-1516.jpg');">
										<div class="block flex-1 bg-white h-[95px] px-4 glass">
											<h4 class="text-xs font-bold text-[#161616] py-4 truncate max-w-[90%] 2xl:max-w-none">Balistic Wave Collection #1</h4>
											<div class="flex items-center justify-between font-bold text-[0.625rem]">
												<div class="flex flex-col">
													<span class="text-[#646464]">Curent Bid</span>
													<span class="flex items-center space-x-1 text-[#161616]">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C3.5815 16 0 12.4185 0 8C0 3.5815 3.5815 0 8 0C12.4185 0 16 3.5815 16 8C16 12.4185 12.4185 16 8 16ZM11.997 8.1095L8.249 2L4.5 8.11L8.249 10.2865L11.997 8.1095ZM12 8.808L8.249 10.9835L4.5 8.8085L8.249 13.9975L12 8.808Z" fill="#F1F1F1" />
															<path d="M8.24902 2V6.435L11.9975 8.11L8.24902 2ZM8.24902 10.984V13.9975L12 8.808L8.24902 10.984Z" fill="blue" fill-opacity="0.298" />
															<path d="M8.24902 10.2865L11.9975 8.11003L8.24902 6.43604V10.2865Z" fill="blue" fill-opacity="0.801" />
															<path d="M4.5 8.11003L8.249 10.2865V6.43604L4.5 8.11003Z" fill="blue" fill-opacity="0.298" />
														</svg>
														<span>0.2 ETH</span>
													</span>
												</div>
												<div>
													<button type="button" class="text-[#161616] hover:text-[#E730CA] border rounded-full border-[#161616] hover:border-[#E730CA] w-12 h-6 transition-colors">
														Bid
													</button>
												</div>
											</div>
									</li>
								</template>
							</ul>
						</section>

						<section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))" :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel">
							<ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
								<template x-for="_ in Array.from({ length: 2 })">
									<li class="col-span-1 flex items-end w-full h-[315px] rounded-2xl 2xl:rounded-3xl bg-center bg-cover bg-no-repeat hover:scale-95 overflow-hidden transition-transform duration-300" style="background-image: url('https://cdn.mos.cms.futurecdn.net/Paxp7F5dLhbaMwT7K2LxoM.jpg');">
										<div class="block flex-1 bg-white h-[95px] px-4 glass">
											<h4 class="text-xs font-bold text-[#161616] py-4 truncate max-w-[90%] 2xl:max-w-none">Balistic Wave Collection #1</h4>
											<div class="flex items-center justify-between font-bold text-[0.625rem]">
												<div class="flex flex-col">
													<span class="text-[#646464]">Curent Bid</span>
													<span class="flex items-center space-x-1 text-[#161616]">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C3.5815 16 0 12.4185 0 8C0 3.5815 3.5815 0 8 0C12.4185 0 16 3.5815 16 8C16 12.4185 12.4185 16 8 16ZM11.997 8.1095L8.249 2L4.5 8.11L8.249 10.2865L11.997 8.1095ZM12 8.808L8.249 10.9835L4.5 8.8085L8.249 13.9975L12 8.808Z" fill="#F1F1F1" />
															<path d="M8.24902 2V6.435L11.9975 8.11L8.24902 2ZM8.24902 10.984V13.9975L12 8.808L8.24902 10.984Z" fill="blue" fill-opacity="0.298" />
															<path d="M8.24902 10.2865L11.9975 8.11003L8.24902 6.43604V10.2865Z" fill="blue" fill-opacity="0.801" />
															<path d="M4.5 8.11003L8.249 10.2865V6.43604L4.5 8.11003Z" fill="blue" fill-opacity="0.298" />
														</svg>
														<span>0.2 ETH</span>
													</span>
												</div>
												<div>
													<button type="button" class="text-[#161616] hover:text-[#E730CA] border rounded-full border-[#161616] hover:border-[#E730CA] w-12 h-6 transition-colors">
														Bid
													</button>
												</div>
											</div>
									</li>
								</template>
							</ul>
						</section>
					</div>
					<div class="flex justify-center">
						<a href="#" class="inline-block rounded-xl bg-[#E730CA] px-4 py-2.5 mt-6 font-semibold text-sm xl:text-base text-white text-center border border-transparent hover:border-[#E730CA] hover:bg-transparent focus-visible:outline-none focus-visible:outline-0 focus-visible:outline-offset-0 focus-visible:outline-transparent transition-colors">Discover More!</a>
					</div>
				</section>

				<!-- Banner -->
				<!-- 				<section class="px-6 lg:px-8 relative">
					<div>
						<div class="relative isolate pt-14">
							<div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40">
								<div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
									<div class="flex">
										<div class="relative flex items-center gap-x-4 rounded-full px-4 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
											<span class="font-semibold text-indigo-600">We’re hiring</span>
											<span class="h-4 w-px bg-gray-900/10" aria-hidden="true"></span>
											<a href="#" class="flex items-center gap-x-1">
												<span class="absolute inset-0" aria-hidden="true"></span>
												See open positions
												<svg class="-mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
													<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
												</svg>
											</a>
										</div>
									</div>
									<h1 class="mt-10 max-w-lg text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">A better way to ship your projects</h1>
									<p class="mt-6 text-lg leading-8 text-gray-600">Esse id magna consectetur fugiat non dolor in ad laboris magna laborum ea consequat. Nisi irure aliquip nisi adipisicing veniam voluptate id. In veniam incididunt ex veniam adipisicing sit.</p>
									<div class="mt-10 flex items-center gap-x-6">
										<a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
										<a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
									</div>
								</div>
								<div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
									<svg viewBox="0 0 366 729" role="img" class="mx-auto w-[22.875rem] max-w-full drop-shadow-xl">
										<title>App screenshot</title>
										<defs>
											<clipPath id="2ade4387-9c63-4fc4-b754-10e687a0d332">
												<rect width="316" height="684" rx="36" />
											</clipPath>
										</defs>
										<path fill="#4B5563" d="M363.315 64.213C363.315 22.99 341.312 1 300.092 1H66.751C25.53 1 3.528 22.99 3.528 64.213v44.68l-.857.143A2 2 0 0 0 1 111.009v24.611a2 2 0 0 0 1.671 1.973l.95.158a2.26 2.26 0 0 1-.093.236v26.173c.212.1.398.296.541.643l-1.398.233A2 2 0 0 0 1 167.009v47.611a2 2 0 0 0 1.671 1.973l1.368.228c-.139.319-.314.533-.511.653v16.637c.221.104.414.313.56.689l-1.417.236A2 2 0 0 0 1 237.009v47.611a2 2 0 0 0 1.671 1.973l1.347.225c-.135.294-.302.493-.49.607v377.681c0 41.213 22 63.208 63.223 63.208h95.074c.947-.504 2.717-.843 4.745-.843l.141.001h.194l.086-.001 33.704.005c1.849.043 3.442.37 4.323.838h95.074c41.222 0 63.223-21.999 63.223-63.212v-394.63c-.259-.275-.48-.796-.63-1.47l-.011-.133 1.655-.276A2 2 0 0 0 366 266.62v-77.611a2 2 0 0 0-1.671-1.973l-1.712-.285c.148-.839.396-1.491.698-1.811V64.213Z" />
										<path fill="#343E4E" d="M16 59c0-23.748 19.252-43 43-43h246c23.748 0 43 19.252 43 43v615c0 23.196-18.804 42-42 42H58c-23.196 0-42-18.804-42-42V59Z" />
										<foreignObject width="316" height="684" transform="translate(24 24)" clip-path="url(#2ade4387-9c63-4fc4-b754-10e687a0d332)">
											<img src="https://tailwindui.com/img/component-images/mobile-app-screenshot.png" alt="" />
										</foreignObject>
									</svg>
								</div>
							</div>
						</div>
					</div>

				</section> -->
			</main>

		</div>
	</div>
	<footer class="bg-[#22252b]">
		<div class="mx-auto max-w-7xl overflow-hidden px-6 py-10 sm:py-12 lg:px-8">
			<nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
				<div class="pb-6">
					<a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-400">Home</a>
				</div>
				<div class="pb-6">
					<a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-400">Marketplace</a>
				</div>
				<div class="pb-6">
					<a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-400">Collections</a>
				</div>
				<div class="pb-6">
					<a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-400">Community</a>
				</div>
				<div class="pb-6">
					<a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-400">Connect Wallet</a>
				</div>
			</nav>
			<div class="mt-10 flex justify-center space-x-10">
				<a href="#" class="text-gray-400 hover:text-gray-300">
					<span class="sr-only">Facebook</span>
					<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
					</svg>
				</a>
				<a href="#" class="text-gray-400 hover:text-gray-300">
					<span class="sr-only">Instagram</span>
					<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
					</svg>
				</a>
				<a href="#" class="text-gray-400 hover:text-gray-300">
					<span class="sr-only">X</span>
					<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
					</svg>
				</a>
				<a href="#" class="text-gray-400 hover:text-gray-300">
					<span class="sr-only">GitHub</span>
					<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
					</svg>
				</a>
				<a href="#" class="text-gray-400 hover:text-gray-300">
					<span class="sr-only">YouTube</span>
					<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
					</svg>
				</a>
			</div>
			<p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; 2024 Naida, Inc. All rights reserved.</p>
		</div>
	</footer>

	<div aria-live="assertive" x-cloak x-show="openError" class="pointer-events-none fixed bottom-0 right-0 border-red-500 flex items-end px-4 py-6 sm:p-6 max-w-[418px] w-full" style="z-index: 1000;">
		<div x-cloak x-show="openError" class="flex w-full flex-col items-center space-y-4 sm:items-end" x-transition:enter="transform ease-out duration-300 transition" x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2" x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="translate-y-0 opacity-100 sm:translate-x-0" x-transition:leave-end="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2">
			<div class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-black bg-opacity-95 shadow-lg ring-1 ring-black ring-opacity-5">
				<div class="p-4">
					<div class="flex items-start">
						<div class="flex-shrink-0">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-[#e730ca]" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
							</svg>
						</div>
						<div class="ml-3 w-0 flex-1 pt-0.5">
							<p class="text-sm font-medium text-[#e730ca]">Error!</p>
							<p class="mt-1 text-sm text-white">Sorry, the site is currently unresponsive.</p>
						</div>
						<div class="ml-4 flex flex-shrink-0">
							<button type="button" x-on:click="openError = false" class="inline-flex rounded-md bg-[#e730ca] text-white hover:text-black focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
								<span class="sr-only">Close</span>
								<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</di>
<!-- partial -->
  <script src='https://cdn.tailwindcss.com'></script>
<script src='https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js'></script>
</body>
</html>
