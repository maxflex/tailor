
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tailor</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
	<div id='app'
		class="main">

		<!--~~~~~ Header ~~~~~-->
		<header
			class="header">

			<div
				class="header__inner">

				<div
					class="header__top">
					<a
						href="/"
						title="TAILOR клубное ателье"
						class="header__logo">
						TAILOR клубное ателье
					</a>

					<ul
						class="header-menu">
						<li
							class="header-menu__item">
							<a
								href="#"
								title="О Костюме"
								class="header-menu__link">
								О Костюме
							</a>
						</li>
						<li
							class="header-menu__item">
							<a
								href="#"
								title="Портфолио"
								class="header-menu__link header-menu__link_active">
								Портфолио
							</a>
						</li>
						<li
							class="header-menu__item">
							<a
								href="#"
								title="Услуги"
								class="header-menu__link">
								Услуги
							</a>
						</li>
						<li
							class="header-menu__item">
							<a
								href="#"
								title="Стоимость"
								class="header-menu__link">
								Стоимость
							</a>
						</li>
						<li
							class="header-menu__item">
							<a
								href="#"
								title="Контакты"
								class="header-menu__link">
								Контакты
							</a>
						</li>
					</ul>

					<div
						class="header__phone">
						8 800 122 23 21
					</div>

				</div>

				<div
					class="header__center">

					<div
						class="header__title">
						Эксклюзивный пошив костюма в клубном ателье.
					</div>

					<ul
						class="header-service">
						<li
							class="header-service__item">
							Точно по фигуре
						</li>
						<li
							class="header-service__item">
							Из высококачественных тканей
						</li>
						<li
							class="header-service__item">
							В мужском клубе-ателье
						</li>
					</ul>
				</div>

				<form
					class="form-main-submit header-send-order">

					<div
						class="header-send-order__title">
						Встреча с личным портным
					</div>

					<div
						class="header-send-order__inner">

						<div
							class="form__col">
							<input
								type="text"
								class="input-text"
								placeholder="Имя"
                                v-model="request.name"
							/>
						</div>

						<div
							class="form__col">
							<input
								type="text"
								class="input-text input-phone-mask"
								placeholder="+7 (___) ___-__-__"
                                v-mask="'+7 (###) ###-##-##'"
                                v-model="request.phone"
							/>
						</div>

						<button
                            @click="makeRequest('Header')"
							title="Отправить"
							class="button">
							Отправить
						</button>

					</div>

				</form>

			</div>

		</header>

		<!--~~~~~ About ~~~~~-->
		<div
			class="about">

			<h1>
				Идеальные костюмы, сорочки, верхнюю одежду мы изготавливаем вручную.
			</h1>

			<div
				class="sub-title">
				Одежда, рожденная подобным способом — это роскошь на уровне ощущений, котораянесомненно чувствуется, но не бросается в глаза.
			</div>

			<ul
				class="about-tabs">
				<li
					class="about-tabs__item about-tabs__item_active">
					<a
						href="#about-tab-1"
						title="Ручной пошив костюмы"
						class="about-tabs__link">
						Ручной пошив костюмы
					</a>
				</li>
				<li
					class="about-tabs__item">
					<a
						href="#about-tab-2"
						title="Костюмы по модели МTM"
						class="about-tabs__link">
						Костюмы по модели МTM
					</a>
				</li>
			</ul>

			<div
				id="about-tab-1"
				class="about-tab-content">
				<div
					class="about-tab-content__inner">
					<div
						class="about-tab-content__text">
						<p>
							Данная технология индивидуального пошива часто обозначается термином bespoke. Это самый дорогой, трудоемкий и высококачественный пошив. Наш мастер снимает мерки и строит персональные лекала. Столь простой на первый взгляд алгоритм создания, например, костюма таит в себе кропотливую, отлаженную работу, составной частью которой являются собственное производство, натуральные ткани, отсутствие клеевых материалов.
						</p>
						Костюм изготовленный по индивидуальным меркам продемонстрирует откружающим, что вы знаете цену качеству и стильным вещам. Он  станет отражением вашей личности, подчеркнет достоинства вашей фигуры и произведет отличное впечатление на деловых переговорах, встрече, презентации или торжественном мероприятии.
					</div>
					<div
						class="about-tab-content__img">
						<img
							src="./pictures/img-1.jpg"
							alt="img-1"
						/>
					</div>
				</div>
			</div>

			<div
				id="about-tab-2"
				class="about-tab-content">
				<div
					class="about-tab-content__inner">
					<div
						class="about-tab-content__text">
						<p>
							Данная технология индивидуального пошива часто обозначается термином bespoke. Столь простой на первый взгляд алгоритм создания, например, костюма таит в себе кропотливую, отлаженную работу, составной частью которой являются собственное производство, натуральные ткани, отсутствие клеевых материалов.
						</p>
						Он  станет отражением вашей личности, подчеркнет достоинства вашей фигуры и произведет отличное впечатление на деловых переговорах, встрече, презентации или торжественном мероприятии.
					</div>
					<div
						class="about-tab-content__img">
						<img
							src="./pictures/img-1.jpg"
							alt="img-1"
						/>
					</div>
				</div>
			</div>

		</div>

		<!--~~~~~ Benefits ~~~~~-->
		<div
			class="benefits">

			<div
				class="content-center">

				<h1>
					Индивидуальный пошив костюма — выбор для мужчин,
					ценящих качество, индивидуальность и стиль.
				</h1>

				<div
					class="sub-title">
					Ручная работа, эксклюзивные лекала, ткани и фурнитура всемирно известных <br>
					производителей – ключевые составляющие безупречного мужского костюма. Все эти <br>
					детали соединяются руками высококвалифицированных портных.
				</div>

				<ul
					class="benefits-list">
					<li
						class="benefits-list__item benefits-list__item_icon-1">
						<h2>Сядет по фигуре</h2>
						Костюм, сшитый на заказ, сядет на любую
						фигуру и учтет все нюансы. Плечи не будут
						съезжать, лацкан не замнется, костюм
						сядет ровно в руках и груди.
					</li>
					<li
						class="benefits-list__item benefits-list__item_icon-2">
						<h2>Из лучших тканей</h2>
						Для изготовления продукции подбираются
						только первоклассные ткани итальянских,
						английских и французских торговых домов.
						Костюм прослужит долгое время.
					</li>
					<li
						class="benefits-list__item benefits-list__item_icon-3">
						<h2>Обеспечить свободу движений</h2>
						Костюм, сшитый на заказ, сядет на любую
						фигуру и учтет все нюансы. Плечи не будут
						съезжать, лацкан не замнется, костюм
						сядет ровно в руках и груди.
					</li>
					<li
						class="benefits-list__item benefits-list__item_icon-4">
						<h2>С учетом всех деталей</h2>
						Для изготовления продукции подбираются
						только первоклассные ткани итальянских,
						английских и французских торговых домов.
						Костюм прослужит долгое время.
					</li>
					<li
						class="benefits-list__item benefits-list__item_icon-5">
						<h2>Стильное качество</h2>
						В индивидуально пошитом костюме все
						движения свободны. Костюм идеально
						продолжает движения.
					</li>
					<li
						class="benefits-list__item benefits-list__item_icon-6">
						<h2>Неповторим</h2>
						При пошиве костюма учитываются все
						детали костюма. Лацканы, ширина рукавов,
						износ и прочие детали.
					</li>
				</ul>

			</div>

		</div>

		<!--~~~~~ Catalog ~~~~~-->
		<div
			class="catalog">

			<div
				class="content-center">

				<h1>
					Исключение для каждого
				</h1>

				<div
					class="sub-title">
					Костюм на заказ - это прежде всего любовь к себе.  Выбирая индивидуальный пошив мужских
					костюмов в нашем ателье Вы стремитесь к совершенству. Ваши инвестиции в идеальный
					гардероб обязательно окупятся, ведь хороший день начинается с хорошего костюма!
				</div>

				<div
					class="catalog-slider__wrapper">
					<div
						class="catalog-slider__arrow catalog-slider__arrow_left">
					</div>
					<div
						class="catalog-slider__arrow catalog-slider__arrow_right">
					</div>
					<ul
						class="catalog-slider">
						<li
							class="catalog-slider__item">
							<div
								class="catalog-slider__img">
								<img
									src="./pictures/img-2.jpg"
									alt="img-2"
								/>
							</div>

							<div
								class="catalog-slider__title">
								Костюм-двойка из 100% мериносовой
								шерсти Holland&Sherry, модель с
								билетным карманом, сезон осень-зима
							</div>

							<div
								class="catalog-slider__text">
								Костюм-двойка из 100% мериносовой
								шерсти Holland&Sherry, модель с
								билетным карманом, сезон осень-зима
							</div>
						</li>
						<li
							class="catalog-slider__item">
							<div
								class="catalog-slider__img">
								<img
									src="./pictures/img-2.jpg"
									alt="img-2"
								/>
							</div>

							<div
								class="catalog-slider__title">
								Костюм-двойка из 100% мериносовой
								шерсти Holland&Sherry, модель с
								билетным карманом, сезон осень-зима
							</div>

							<div
								class="catalog-slider__text">
								Костюм-двойка из 100% мериносовой
								шерсти Holland&Sherry, модель с
								билетным карманом, сезон осень-зима
							</div>
						</li>
						<li
							class="catalog-slider__item">
							<div
								class="catalog-slider__img">
								<img
									src="./pictures/img-2.jpg"
									alt="img-2"
								/>
							</div>

							<div
								class="catalog-slider__title">
								Костюм-двойка из 100% мериносовой
								шерсти Holland&Sherry, модель с
								билетным карманом, сезон осень-зима
							</div>

							<div
								class="catalog-slider__text">
								Костюм-двойка из 100% мериносовой
								шерсти Holland&Sherry, модель с
								билетным карманом, сезон осень-зима
							</div>
						</li>
						<li
							class="catalog-slider__item">
							<div
								class="catalog-slider__img">
								<img
									src="./pictures/img-2.jpg"
									alt="img-2"
								/>
							</div>

							<div
								class="catalog-slider__title">
								Костюм-двойка из 100% мериносовой
								шерсти Holland&Sherry, модель с
								билетным карманом, сезон осень-зима
							</div>

							<div
								class="catalog-slider__text">
								Костюм-двойка из 100% мериносовой
								шерсти Holland&Sherry, модель с
								билетным карманом, сезон осень-зима
							</div>
						</li>
					</ul>
				</div>

				<div
					class="clearfix">
				</div>


				<div
					class="catalog__button">
					<a
						href="#"
						title="Узнайте каким будет Ваш костюм"
						class="button button_brown show-pop-up-order">
						Узнайте каким будет Ваш костюм
					</a>
				</div>

			</div>

		</div>

		<!--~~~~~ Partners benefits ~~~~~-->
		<div
			class="partners-benefits">
			<div
				class="content-center">

				<h1>
					Станьте нашим другом и мы станем для вас <br>
					вторым домом
				</h1>

				<div
					class="sub-title">
					Ателье — это не просто исключительное качество индивидуального пошива мужской одежды, обуви и аксессуаров. Мы любим свою работу и уверены, что Вы насладитесь процессом создания Вашего
					идеального гардероба вместе с нами. Наше ателье создано в виде джентельменского клуба, где можно не только создать себе костюм, но и провести встречу.
				</div>

				<ul
					class="partners-benefits-list">
					<li
						class="partners-benefits-list__item partners-benefits-list__item_icon-1">
						<h2>
							Личный портной
						</h2>
						Ваш костюм шьет непосредственно портной, который подбирает Вам
						образ, помогает с выбором тканей
					</li>
					<li
						class="partners-benefits-list__item partners-benefits-list__item_icon-2">
						<h2>
							Воплощение всех пожеланий
						</h2>
						В процессе работы мы учтем все
						пожелания заказчика касательно
						тканей, силуэта,пуговиц и прочего
					</li>
					<li
						class="partners-benefits-list__item partners-benefits-list__item_icon-3">
						<h2>
							Разнообразные
							технологии шитья
						</h2>
						Мы шьем по различным технологиям,
						что подразумевает различные сроки
						и разную стоимость. Выбирайте
					</li>
					<li
						class="partners-benefits-list__item partners-benefits-list__item_icon-4">
						<h2>
							Подбор стиля
						</h2>
						Мы узнаем Ваши потребности и
						поможем с выбором стиля, чтобы
						костюм был максимально
						комфортным и практичным
					</li>
					<li
						class="partners-benefits-list__item partners-benefits-list__item_icon-5">
						<h2>
							Вы выбираете
							время и место
						</h2>
						Вы решаете, где Вам удобно
						встретится для снятия мерок
						и примерки.
					</li>
					<li
						class="partners-benefits-list__item partners-benefits-list__item_icon-6">
						<h2>
							Исключение для
							каждого
						</h2>
						Наш сервис не оставит Вас
						равнодушным. Проведите у нас
						бизнес-встречу или просто
						общайтесь с друзьями
					</li>
				</ul>

			</div>
		</div>

		<!--~~~~~ Phone order ~~~~~-->
		<div
			class="phone-order">
			<div
				class="phone-order__inner">
				<div
					class="phone-order__title">
					Мы ценим Ваше время
				</div>
				<div
					class="phone-order__text">
					Просто оставьте телефон, дальше все сделаем мы
				</div>
				<form
					class="form-main-submit phone-order__form">

					<div
						class="form__col">
						<input
							type="text"
							class="input-text input-phone-mask"
							placeholder="+7 (___) ___-__-__"
                            v-mask="'+7 (###) ###-##-##'"
                            v-model="request.phone"
						/>
					</div>

					<button @click="makeRequest('Мы ценим Ваше время')"
						title="Отправить"
						class="button">
						Отправить
					</button>

				</form>
			</div>
		</div>

		<!--~~~~~ Price ~~~~~-->
		<div
			class="price">
			<div
				class="content-center">

				<h1>
					Стоимость наших работ
				</h1>

				<div
					class="sub-title">
					В зависимости от технологии пошива, костюмы имеют разную стоимость и конечную цену <br>
					возможно определить после общения с заказчиком и выбора ткани, аксессуаров и прочего.
				</div>

				<div
					class="price__wrapper">
					<div
						class="price__col price__col_left">

						<div
							class="price__title">
							Ручной пошив портным по <br>
							индивидуальным лекалам Bespoke
						</div>

						<div
							class="price__count">
							от 150 000 руб.
						</div>

						<ul
							class="price-benefits-list">
							<li
								class="price-benefits-list__item">
								Пошив по вашим меркам
							</li>
							<li
								class="price-benefits-list__item">
								Консультация по подбору гардероба
							</li>
							<li
								class="price-benefits-list__item">
								Бесплатный выезд портного
							</li>
							<li
								class="price-benefits-list__item">
								Английские, итальянские и французские ткани S100-S120
							</li>
							<li
								class="price-benefits-list__item">
								Английские, итальянские и французские ткани S120-S150
							</li>
							<li
								class="price-benefits-list__item">
								Английские, итальянские и французские ткани S150 и выше
							</li>
							<li
								class="price-benefits-list__item">
								Эксклюзивная фурнитура и ручные петли
							</li>
							<li
								class="price-benefits-list__item">
								Возможность учесть все пожелания заказчика
							</li>
							<li
								class="price-benefits-list__item">
								Идеальная посадка
							</li>
							<li
								class="price-benefits-list__item">
								Полностью ручная работа
							</li>
						</ul>

					</div>

					<div
						class="price__col price__col_right">

						<div
							class="price__title">
							Пошив по фабричным<br>
							лекалам - MTM
						</div>

						<div
							class="price__count">
							от 60 000 руб.
						</div>

						<ul
							class="price-benefits-list">
							<li
								class="price-benefits-list__item">
								Пошив по вашим меркам
							</li>
							<li
								class="price-benefits-list__item">
								Консультация по стилю
							</li>
							<li
								class="price-benefits-list__item">
								Бесплатный выезд портного
							</li>
							<li
								class="price-benefits-list__item">
								Английские, итальянские и французские ткани S100-S120
							</li>
						</ul>

					</div>

				</div>

			</div>
		</div>

		<!--~~~~~ Fabrics ~~~~~-->
		<div
			class="fabrics">
			<div
				class="content-center">

				<h1>
					Ткани
				</h1>

				<div
					class="sub-title">
					Наши портные и закройщики с многолетним стажем традиционного пошива костюмов<br>
					знают все тонкости и секреты своего ремесла. Для изготовления продукции подбираются<br>
					только первоклассные ткани итальянских, английских и французских торговых домов.
				</div>

				<ul
					class="fabrics-list">
					<li
						class="fabrics-list__item">
						<div
							class="fabrics-list__img">
							<img
								src="./pictures/img-3.jpg"
								alt="img-3"
							/>
						</div>
						100% мериносовая  шерсть Holland&Sherry
					</li>
					<li
						class="fabrics-list__item">
						<div
							class="fabrics-list__img">
							<img
								src="./pictures/img-4.jpg"
								alt="img-4"
							/>
						</div>
						100% мериносовая  шерсть Holland&Sherry
					</li>
					<li
						class="fabrics-list__item">
						<div
							class="fabrics-list__img">
							<img
								src="./pictures/img-5.jpg"
								alt="img-5"
							/>
						</div>
						100% мериносовая  шерсть Holland&Sherry
					</li>
					<li
						class="fabrics-list__item">
						<div
							class="fabrics-list__img">
							<img
								src="./pictures/img-6.jpg"
								alt="img-6"
							/>
						</div>
						100% мериносовая  шерсть Holland&Sherry
					</li>
					<li
						class="fabrics-list__item">
						<div
							class="fabrics-list__img">
							<img
								src="./pictures/img-7.jpg"
								alt="img-7"
							/>
						</div>
						100% мериносовая  шерсть Holland&Sherry
					</li>
					<li
						class="fabrics-list__item">
						<div
							class="fabrics-list__img">
							<img
								src="./pictures/img-8.jpg"
								alt="img-8"
							/>
						</div>
						100% мериносовая  шерсть Holland&Sherry
					</li>
				</ul>

			</div>
		</div>

		<!--~~~~~ Personal approach ~~~~~-->
		<div
			class="personal-approach">
			<div
				class="content-center">

				<h1>
					Персональный подход к заказчику
				</h1>

				<div
					class="sub-title">
					Наши портные и закройщики с многолетним стажем традиционного пошива костюмов<br>
					знают все тонкости и секреты своего ремесла. Для изготовления продукции подбираются<br>
					только первоклассные ткани итальянских, английских и французских торговых домов.
				</div>

				<div
					class="personal-approach__wrapper">
					<div
						class="personal-approach__img">
						<img
							src="./pictures/img-10.jpg"
							alt="img-9"
						/>
					</div>

					<ul
						class="personal-approach-list">
						<li
							class="personal-approach-list__item">
							<div
								class="personal-approach-list__title">
								Запись на примерку
							</div>
							Выбираем место и время встречи с портным.
							Встреча возможна у нас в ателье или портной
							сможет приехать к вам на работу или домой.
						</li>
						<li
							class="personal-approach-list__item">
							<div
								class="personal-approach-list__title">
								Снятие мерок
							</div>
							На встрече портной поможет выбрать ткани,
							определит дизайн и стиль, подходящий под
							образ. Учтет все пожелания и снимет мерки
						</li>
						<li
							class="personal-approach-list__item">
							<div
								class="personal-approach-list__title">
								Процесс пошива
							</div>
							Портной создаст персональное лекало и
							начнет пошив костюма. В течение полутора
							месяцев мы приглашаем Вас на 2-3
							промежуточные примерки, в ходе которых
							добиваемся идеальной посадки изделия.
						</li>
						<li
							class="personal-approach-list__item">
							<div
								class="personal-approach-list__title">
								Передача уникального костюма
							</div>
							Передаем вам готовое и неповторимое изделие.
							Ваши мерки храняться в нашем ателье. ЕСли
							Вы захотите сшить себе новые вещи мы уже
							будем знать Ваши параметры.
						</li>
					</ul>
				</div>

			</div>
		</div>

		<!--~~~~~ Send order ~~~~~-->
		<div
			class="send-order">
			<div
				class="send-order__inner">
				<div
					class="send-order__center">

					<div
						class="send-order__title">
						Оставьте заявку для записи на встречу с личным портным
					</div>

					<form
						class="form-main-submit send-order__form">
						<div
							class="form__col">
							<input
								type="text"
								class="input-text"
								placeholder="Имя"
                                v-model="request.name"
							/>
						</div>

						<div
							class="form__col">
							<input
								type="text"
								class="input-text input-phone-mask"
								placeholder="+7 (___) ___-__-__"
                                v-mask="'+7 (###) ###-##-##'"
                                v-model="request.phone"
							/>
						</div>

						<div
							class="form__col">
							<textarea
								placeholder="Комментарии"
								class="textarea"
								rows="0" v-model="request.comments"
								cols="0"></textarea>
						</div>

						<div
							class="form__col">
							<button @click="makeRequest('Оставьте заявку для записи на встречу с личным портным')"
								title="Отправить"
								class="button">
								Отправить
							</button>
						</div>
					</form>

				</div>
			</div>
		</div>

		<!--~~~~~ Gift Certificate ~~~~~-->
		<div
			class="gift-certificate">
			<h1>
				Подарочный сертификат
			</h1>

			<div
				class="gift-certificate__text">
				<p>
					Подарочный сертификат – удовольствие, которое всегда приятно дарить и получать.
					Индивидуальный пошив костюма, сорочки или верхней одежды - подарок, которым дорогие Вам люди
					обязательно воспользуются.
				</p>
				<p>
					Вместо долгих и утомительных поисков просто позвоните нам, и мы доставим сертификат в
					удобные Вамместо и время.Сертификат от ателье станет отличным дополнением либо самостоятельным подарком для Ваши близких,друзей и деловых партнеров. Вы можете приобрести подарочный сертификат на любую услугу по пошиву
					изделий будь то обувь, костюм, пальто, сорочка и многое другое. По Вашему желанию сертификат может быть
					реализован как на конкретное изделие, так и на сумму с правом выбора услуги в рамках суммы номинала сертификата.
				</p>
			</div>

			<div
				class="gift-certificate__price">
				Сумма сертификата начинается от 30 000 рублей.
			</div>

			<a
				href="#"
				class="show-pop-up-order-certificate button button_brown"
				title="Оформить сертификат">
				Оформить сертификат
			</a>

		</div>

		<!--~~~~~ Contacts ~~~~~-->
		<div
			class="contacts">

			<div
				class="contacts__map">
				<img
					src="./pictures/img-11.jpg"
					alt="img-11"
				/>
			</div>

			<div
				class="content-center">

				<div
					class="contacts-content">
					<div
						class="contacts-content__inner">
						<div
							class="contacts-content__title">
							Контакты
						</div>
						<div
							class="contacts-content__phone">
							+7(499)702-49-48
						</div>
						<div
							class="contacts-content__adress">
							Москва, ул. Новый Арбат, 32,
						</div>
						<a
							href="#"
							title="Напишите нам"
							class="show-pop-up-order button button_white">
							Напишите нам
						</a>
					</div>
				</div>

			</div>

		</div>

		<div
			class="footer-clear-fix">
		</div>

		<footer
			class="footer">
			<div
				class="footer__inner">
				<a
					href="/"
					title="TAILOR клубное ателье"
					class="footer__logo">
					TAILOR клубное ателье
				</a>
			</div>
		</footer>
        @include('modals.order')
        @include('modals.cert')
        @include('modals.other')
	</div>
	<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
