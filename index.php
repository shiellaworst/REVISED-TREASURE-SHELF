<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Treasure-Shelf</title>

		<!-- tailwind -->
		<script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.tailwindcss.com/2.2.16/tailwind.min.css">

	<!-- splide -->
        <link rel="stylesheet" href="https://unpkg.com/@splidejs/splide@3.0.7/dist/css/splide.min.css">
        <script src="https://unpkg.com/@splidejs/splide@3.0.7/dist/js/splide.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>

	</head>
	<body class="bg-[#F2E5D0]">
		<!--* Header-->
		<nav
			class="bg-transparent mx-auto max-w-6xl w-11/12 flex justify-between items-center h-[91px]"
		>
			<!--* Left Side -->
			<img src="images/LOGO3BB.png" alt="logo" class="w-[80px] h-[80px]" />
			<!--* Right Side -->
			<div class="flex gap-9">
				<a class="text-black p-2 font-bold hover:text-[#FCA72B]" href="hp-about-us.php"
					>About</a
				>
				<a class="text-black p-2 font-bold hover:text-[#FCA72B]" href="hp-contact-us.php"
					>Contact Us</a
				>
				<a
					class="py-2 px-8 text-black bg-[#FCA72B] hover:bg-[#F9F3EE] rounded-[20px] font-bold hover:text-yellow-800 transition ease-in duration-150"
					href="login.php"
					>LOGIN</a
				>
			</div>
		</nav>
		<!--* Banner -->
		<div
			class="w-full h-auto md:h-[550px] text-center"
			style="
				background-image: url('images/bannerPhoto.png');
				background-repeat: no-repeat;
				background-size: cover;
			"
		>
			<div class="max-w-6xl mx-auto :w-11/12 flex items-center flex-col gap-4">
				<div class="w-full md:w-5/6 mt-8">
					<h1 class="font-bold text-3xl md:text-5xl font-sans">
						Treasure Shelf: Book Recommendation
					</h1>
				</div>
				<div class="w-3/4 md:w-2/4">
					<p class="text-slate-700">
						Helps readers have access to books that have a wide variety of the
						content available. The proposed application will address the growing
						need for a more convenient and efficient way of discovering books in
						the digital age.
					</p>
				</div>

				<div class="flex gap-11 mt-8">
					<div
						class="bg-[#F9F3EE] border border-black w-24 h-24 md:w-52 md:h-52 p-4 flex flex-col justify-between rounded-lg"
					>
						<div></div>
						<h1 class="font-black text-lg md:text-5xl text-[#FCA72B]">
							10600+
						</h1>

						<p class="text-[#715C3A] font-thin text-lg">Books</p>
					</div>

					<div
						class="bg-[#F9F3EE] border border-black w-24 h-24 md:w-52 md:h-52 p-4 flex flex-col justify-between rounded-lg"
					>
						<div></div>
						<h1 class="font-black text-lg md:text-5xl text-[#FCA72B]">6999+</h1>

						<p class="text-[#715C3A] font-thin text-lg">Authors</p>
					</div>

					<div
						class="bg-[#F9F3EE] border border-black w-24 h-24 md:w-52 md:h-52 p-4 flex flex-col justify-between rounded-lg"
					>
						<div></div>
						<h1 class="font-black text-lg md:text-5xl text-[#FCA72B]">3090+</h1>

						<p class="text-[#715C3A] font-thin text-lg">Genres</p>
					</div>
				</div>
			</div>
		</div>

		<div class="max-w-6xl mx-auto flex justify-center mt-4 md:-mt-7 mb-[50px]">
			<div class="w-11/12 md:w-8/12 relative">
				<input
					type="text"
					class="border border-black bg-[#F9F3EE] rounded-[59px] px-6 py-2 md:py-4 w-full"
					placeholder="Search..."
				/>

				<button class="absolute right-6 bottom-2 md:bottom-4">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="w-6 h-6 text-slate-700"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
						/>
					</svg>
				</button>
			</div>
		</div>

		<!--* Cards -->
		<section class="max-w-6xl mx-auto w-11/12">

			<h1 class="font-medium text-3xl font-sans md:mb-0 mb-4">
				Hottest books of the moment
			</h1>
            <p class="text-slate-700 text-xl">
                Explore the bestselling books from various online shops, 
                featuring captivating stories and valuable knowledge 
                that have captured readers' attention worldwide.
            </p>

			<div id="image-carousel" class="splide grid-cols-2 overflow-hidden md:grid-cols-4 gap-3 md:px-32 mt-8 mb-8" aria-label="Best seller">
                <div class="splide__track">
                  <ul class="splide__list gap-[5px]">
					<li class="splide__slide">
						<a href="https://press.up.edu.ph/store/books/view_item/714" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/714.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Press Freedom Under Siege: Reportage that Challenged the Marcos Dictatorship (Reprint)</p>
							</div>
						</a>
					</li>
					
					

                    <li class="splide__slide">
						<a href="https://www.nationalbookstore.com/books/31730-a-gentle-reminder-trade-paperback-by-bianca-sparacino-psychology-self-help-books.html" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/agr.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">A Gentle Reminder Trade Paperback by Bianca Sparacino - Psychology - Self-Help Books</p> 
							</div>
						</a>
					</li>
                    
                    <li class="splide__slide">
						<a href="https://artbooks.ph/products/alpabeto-ng-kulturang-filipino?_pos=1&_sid=eb358a170&_ss=r" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/ankp.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Alpabeto ng Kulturang Filipino</p> 
							</div>
						</a>
					</li>


                    <li class="splide__slide">
						<a href="https://www.amazon.com/dp/0593189647?tag=meetnewbooks-20&linkCode=osi&th=1&psc=1" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/atomic.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Atomic Habits: an Easy & Proven Way to Build Good Habits and Break Bad Ones</p> 
							</div>
						</a>
					</li>

                    <li class="splide__slide">
						<a href="https://press.up.edu.ph/store/books/view_item/722" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/bagets.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Babaylan Sing Back: Philippine Shamans and Voice, Gender and Place</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://press.up.edu.ph/store/books/view_item/714" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/714.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Bagets: an Anthology of Filipino Young Adult Fiction (Reprint)</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://www.amazon.com/dp/1534467637?tag=meetnewbooks-20&linkCode=osi&th=1&psc=1" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/bttm.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Better Than the Movies Paperback – July 26, 2022</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://press.up.edu.ph/store/books/view_item/791" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/buklat.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Buklat / Mulat Pagbasa at Paglikha ng mga Aklat Pambata</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://www.nationalbookstore.com/books/21353-everything-is-fcked-tradepaper.html" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/eif.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Everything Is F*cked by Mark Manson Trade Paperback</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://www.nationalbookstore.com/books/7033-it-ends-with-us-.html" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/iewu.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">It Ends With Us by Colleen Hoover - Trade Paperback - New Adult Fiction</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://www.nationalbookstore.com/books/31380-it-starts-with-us-by-colleen-hoover-trade-paperback-new-adult-fiction.html" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/iswu.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">It Starts With Us by Colleen Hoover - Trade Paperback - New Adult Fiction</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://artbooks.ph/products/martial-law-in-the-philippines?_pos=1&_sid=56723155e&_ss=r" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/martial.jpeg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Martial Law in the Philippines: Lessons & Legacies, 1972-2022</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://www.amazon.com/dp/0593396596?tag=meetnewbooks-20&linkCode=osi&th=1&psc=1" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/OIP.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Crying in H Mart Paperback - Large Print, May 11, 2021</p> 
							</div>
						</a>
					</li>


					<li class="splide__slide">
						<a href="https://www.nationalbookstore.com/books/37809-pre-order-the-city-inside-by-samit-basu-sci-fi-fantasy-horror.html?search_query=the+city+inside&results=1221" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/tci.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">The City Inside by Samit Basu - Sci-Fi, Fantasy & Horror</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://www.amazon.com/dp/1538742578?tag=meetnewbooks-20&linkCode=osi&th=1&psc=1" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/th.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">The Housemaid Paperback - August 23, 2022</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://www.amazon.com/dp/0062457721?tag=meetnewbooks-20&linkCode=osi&th=1&psc=1" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/tsaongaf.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">The Subtle Art of Not Giving a F*ck: A Counterintuitive Approach to Living a Good Life Paperback - July 15, 2024</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://www.meetnewbooks.com/book/88891/The-Seven-Husbands-of-Evelyn-Hugo-Taylor-Jenkins-Reid" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/tshoeh.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">The Seven Husbands of Evelyn Hugo: A Novel Paperback - May 29, 2018</p> 
							</div>
						</a>
					</li>

					<li class="splide__slide">
						<a href="https://www.nationalbookstore.com/books/37811-pre-order-yerba-buena-a-novel-by-nina-lacour-contemporary-fiction-multi.html" target="_blank">
							<div class="rounded-[10px] shadow-lg bg-yellow-800 h-100 p-4 grid justify-items-center text-center">
								<img class="h-[230px] w-full rounded" src="images/trend-books/yerba.jpg" alt="Image Description">
								<p class="text-[#FCA72B] font-normal text-lg card-title tracking-tight">Yerba Buena: A Novel by Nina Lacour - Contemporary Fiction</p> 
							</div>
						</a>
					</li>

                  </ul>
                </div>
            </div>



		</section>

		<section class="mx-auto max-w-6xl w-11/12">
			<h1 class="font-medium text-3xl font-sans md:mb-0 mb-4">
				Explore more category
			</h1>

			<div
				class="w-full md:p-16 grid grid-cols-3 md:grid-cols-4 gap-3 md:gap-14"
			>
			<a href="bookshelf/shelf_horror.php">
				<div
					class="flex text-center border overflow-hidden border-black rounded-full p-4 bg-[#F9F3EE] cursor-pointer"
				>
					<img src="images/icons/horror.png" alt="" class="w-auto h-10" />
					<h1 class="text-xl font-sans font-thin flex-grow">Horror</h1>
				</div>
			</a>

			<a href="bookshelf/shelf_sci fi.php">
				<div
					class="flex text-center border border-black rounded-full p-4 bg-[#F9F3EE] cursor-pointer"
				>
					<img src="images/icons/alien.png" alt="" class="w-auto h-10" />
					<h1 class="text-xl font-sans font-thin flex-grow">Sci-fi</h1>
				</div>
			</a>

			<a href="bookshelf/shelf_methology.php">
				<div
					class="flex text-center border border-black rounded-full p-4 bg-[#F9F3EE] cursor-pointer"
				>
					<img src="images/icons/myth 1.png" alt="" class="w-auto h-10" />
					<h1 class="text-xl font-sans font-thin flex-grow">Mythology</h1>
				</div>
			</a>

			<a href="bookshelf/shelf_drama.php">
				<div
					class="flex text-center border border-black rounded-full p-4 bg-[#F9F3EE] cursor-pointer"
				>
					<img src="images/icons/drama 1.png" alt="" class="w-auto h-10" />
					<h1 class="text-xl font-sans font-thin flex-grow">Drama</h1>
				</div>

			</a>

			<a href="bookshelf/shelf_romance.php">
				<div
					class="flex text-center border border-black rounded-full p-4 bg-[#F9F3EE] cursor-pointer"
				>
					<img src="images/icons/love 1.png" alt="" class="w-auto h-10" />
					<h1 class="text-xl font-sans font-thin flex-grow">Romance</h1>
				</div>
			</a>
			<a href="bookshelf/shelf_fiction.php">
				<div
					class="flex text-center border border-black rounded-full p-4 bg-[#F9F3EE] cursor-pointer"
				>
					<img src="images/icons/fiction 1.png" alt="" class="w-auto h-10" />
					<h1 class="text-xl font-sans font-thin flex-grow">Fiction</h1>
				</div>
			</a>
			<a href="bookshelf/shelf_history.php">
				<div
					class="flex text-center border border-black rounded-full p-4 bg-[#F9F3EE] cursor-pointer"
				>
					<img src="images/icons/history 1.png" alt="" class="w-auto h-10" />
					<h1 class="text-xl font-sans font-thin flex-grow">History</h1>
				</div>
			</a>

			<a href="bookshelf/shelf_fable.php">
				<div
					class="flex text-center border border-black rounded-full p-4 bg-[#F9F3EE] cursor-pointer"
				>
					<img src="images/icons/fable 1.png" alt="" class="w-auto h-10" />
					<h1 class="text-xl font-sans font-thin flex-grow">Fable</h1>
				</div>
			</a>

			
				<div class="hidden md:block"></div>
				
				<a href="bookshelf/shelf_novel.php">
					<div
						class="flex text-center border border-black rounded-full p-4 bg-[#F9F3EE] cursor-pointer"
					>
						<img
							src="images/icons/toyota girl 1.png"
							alt=""
							class="w-auto h-10"
						/>
						<h1 class="text-xl font-sans font-thin flex-grow">Novel</h1>
					</div>
			</a>
			<a href="bookshelf/shelf_selfhelp.php">
				<div
					class="flex text-center border border-black rounded-full p-4 bg-[#F9F3EE] cursor-pointer"
				>
					<img src="images/icons/kid 1.png" alt="" class="w-auto h-10" />
					<h1 class="text-xl font-sans font-thin flex-grow">Self Help</h1>
				</div>
			
				<div class="hidden md:block"></div>
			</a>
			</div>
		</section>


		<!-- Online bookstores -->
	
		<section class="mx-auto max-w-6xl w-11/12 m-[20px]">
			<h1 class="font-medium text-3xl font-sans md:mb-0 mb-4">
				Shops we offer
			</h1>
			
			<div class="mb-4 w-full md:p-16 grid grid-cols-3 md:grid-cols-4 gap-3 md:gap-14">
				
					
				<div class="flex flex-col items-center ">
					<a href="https://www.meetnewbooks.com/" target="_blank">	
						<img src="images/mnb.jpeg" class="h-[150px] w-[150px] rounded-full border-2 border-[#FCA72B]" alt="" />
						<p class="text-center p-[20px] font-bold font-ui-sans text-yellow-800">Meet New Books</p>
					</a>
				</div>
				
				<div class="flex flex-col items-center ">
					<a href="https://www.nationalbookstore.com/" target="_blank">	
						<img src="images/nbs.jpg" class="h-[150px] w-[150px] rounded-full border-2 border-[#FCA72B]" alt="" />
						<p class="text-center p-[20px] font-bold font-ui-sans text-yellow-800">National Bookstore</p>
					</a>
				</div>

				<div class="flex flex-col items-center ">
					<a href="https://press.up.edu.ph/store/" target="_blank">	
						<img src="images/up-logo.png" class="h-[150px] w-[150px] rounded-full border-2 border-[#FCA72B]" alt="" />
						<p class="text-center p-[20px] font-bold font-ui-sans text-yellow-800">UP Press Bookstore</p>
					</a>
				</div>

				<div class="flex flex-col items-center ">
					<a href="https://artbooks.ph/" target="_blank">	
						<img src="images/artbooks.jpg" class="h-[150px] w-[150px] rounded-full border-2 border-[#FCA72B]" alt="" />
						<p class="text-center p-[20px] font-bold font-ui-sans text-yellow-800">Artbooks.ph</p>
					</a>
				</div>

			  </div>
			  
		</section>
		
		<!-- Famous Quote about books -->
		<section class="w-full h-auto md:h-[200px] text-center bg-[#C9C9C9]">
		<div class="max-w-6xl mx-auto :w-11/12 flex items-center flex-col gap-4">
			<div class="w-full md:w-5/6 mt-8">
				<h1 class="font-bold text-3xl md:text-4xl font-ui-sans">
					"The more that you read, the more things you will know. 
					The more that you learn, the more places you'll go."
				</h1>
				<h1 class="font-medium text-3xl font-sans md:mb-0 mb-4 m-[20px]">
					- Dr. Seuss
				</h1>
			</div>
		</section>


		<!--* Footer + Newsletters -->


		<section class="bg-transparent mx-auto max-w-6xl w-11/12 flex justify-between items-center h-[71px]">
			
			<div class="max-w-screen-xl px-4 mx-auto overflow-hidden sm:px-6 lg:px-8">
				
				<div class="flex justify-center pb-[5px] gap-[20px]">
					<a href="https://www.facebook.com/treasure.shelf2023" target="_blank" class="text-gray-400 hover:text-gray-500">
						<span class="sr-only">Facebook</span>
						<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
							<path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
						</svg>
					</a>
					<a href="https://instagram.com/treasure.shelf2023?igshid=YmMyMTA2M2Y=" target="_blank" class="text-gray-400 hover:text-gray-500">
						<span class="sr-only">Instagram</span>
						<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
							<path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
						</svg>
					</a>
					<a href="https://twitter.com/TreasureShelf" target="_blank" class="text-gray-400 hover:text-gray-500">
						<span class="sr-only">Twitter</span>
						<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
							<path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
						</svg>
					</a>
					<a href="https://github.com/shiellaworst/TREASURE-SHELF" target="_blank" class="text-gray-400 hover:text-gray-500">
						<span class="sr-only">GitHub</span>
						<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
							<path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
						</svg>
					</a> 
					  
				</div>
				<p class="text-center text-gray-400">
					© 2023 Treasure Shelf: Book Recommendations All rights reserved.
				</p>
			</div>
		</section>


	</body>

	<script>

		document.addEventListener('DOMContentLoaded', function () {
			const splide = new Splide('#image-carousel', {
				type: 'loop',
				drag: 'free',
				focus: 'center',
				perPage: 4,
				autoScroll: {
				speed: 3,
				},
				autoStart: boolean = true,
			});

			splide.mount( window.splide.Extensions );
		});

		const titleElements = document.querySelectorAll(".card-title");

		titleElements.forEach((titleElement) => {
			const titleText = titleElement.textContent;

			if (titleText.length > 25) {
				const truncatedTitle = titleText.substring(0, 30) + "...";
				titleElement.textContent = truncatedTitle;
			}
		});
	</script>
</html>
