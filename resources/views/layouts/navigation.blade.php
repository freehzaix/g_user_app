<!-- leftbar-tab-menu -->
<div class="leftbar-tab min-w-[260px] z-[99] duration-300 print:hidden">
    <div class="flex w-[60px] bg-iconbar dark:bg-slate-800 py-4 items-center fixed top-0 z-[99]
            rounded-[100px] m-4 flex-col h-[calc(100%-30px)]">
      <!-- Page Heading -->
@isset($header)
<header class="bg-white shadow">
    {{ $header }}
</header>
@endisset

      <div class="icon-body max-h-full w-full overflow-hidden">
        <div class="relative h-full">
          <ul class="flex-col w-[60px] items-center mt-[60px] flex-1 border-b-0 tab-menu" id="tab-menu"
            data-tabs-toggle="#Icon-menu">
            <li class="my-0 flex justify-center menu-items" role="presentation">
              <button class="inline-block py-4 px-4 text-sm font-medium relative
                      text-center text-gray-700 rounded-t-lg border-0
                      border-transparent hover:text-primary-500
                      dark:text-gray-400 dark:hover:text-primary-400 menu-link" id="Dashboards-tab"
                data-tabs-target="#Dashboards" type="button" role="tab" aria-controls="Dashboards"
                aria-selected="false">
                <i class="ti ti-smart-home text-3xl"></i>
              </button>
            </li>
            <li class="my-0 flex justify-center menu-items" role="presentation">
              <button class="inline-block py-4 px-4 text-sm font-medium relative
                      text-center text-gray-700 rounded-t-lg border-0
                      border-transparent hover:text-primary-500
                      dark:text-gray-400 dark:hover:text-primary-400 menu-link" id="Apps-tab" data-tabs-target="#Apps"
                type="button" role="tab" aria-controls="Apps" aria-selected="false">
                <i class="ti ti-apps text-3xl"></i>
              </button>
            </li>
            <li class="my-0 flex justify-center menu-items" role="presentation">
              <button class="inline-block py-4 px-4 text-sm font-medium relative
                      text-center text-gray-700 rounded-t-lg border-0
                      border-transparent hover:text-primary-500
                      dark:text-gray-400 dark:hover:text-primary-400 menu-link" id="Uikit-tab"
                data-tabs-target="#Uikit" type="button" role="tab" aria-controls="Uikit" aria-selected="false">
                <i class="ti ti-planet text-3xl"></i>
              </button>
            </li>
            <li class="my-0 flex justify-center menu-items" role="presentation">
              <button class="inline-block py-4 px-4 text-sm font-medium relative
                      text-center text-gray-700 rounded-t-lg border-0
                      border-transparent hover:text-primary-500
                      dark:text-gray-400 dark:hover:text-primary-400 menu-link" id="Pages-tab"
                data-tabs-target="#Pages" type="button" role="tab" aria-controls="Pages" aria-selected="false">
                <i class="ti ti-files text-3xl"></i>
              </button>
            </li>
            <li class="my-0 flex justify-center menu-items" role="presentation">
              <button class="inline-block py-4 px-4 text-sm font-medium relative
                      text-center text-gray-700 rounded-t-lg border-0
                      border-transparent hover:text-primary-500
                      dark:text-gray-400 dark:hover:text-primary-400 menu-link" id="Authentication-tab"
                data-tabs-target="#Authentication" type="button" role="tab" aria-controls="Authentication"
                aria-selected="false">
                <i class="ti ti-shield-lock text-3xl"></i>
              </button>
            </li>
          </ul>
        </div>
      </div>
      <div class="flex flex-col items-center mt-auto bg-iconbar dark:bg-slate-800 shrink-0">
        <a href="">
          <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-full w-8 h-8">
        </a>
      </div>
    </div>
    <div
      class="main-menu-inner h-full w-[200px] my-4  fixed top-0 z-[99] left-[calc(60px+16px)] rtl:right-[calc(60px+16px)] rtl:left-0 rounded-lg transition delay-150 duration-300 ease-in-out">
      <div class="main-menu-inner-logo">
        <div class="flex items-center">
          <a href="index.html" class="leading-[60px]">
            <img src="assets/images/logo-2.png" alt=""
              class="inline-block dark:hidden h-[15px] ltr:ml-4 rtl:ml-0 rtl:mr-4">
            <img src="assets/images/logo.png" alt=""
              class=" hidden dark:inline-block h-[15px] ltr:ml-4 rtl:ml-0 rtl:mr-4">
          </a>
          <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4 ml-auto block xl:hidden">
            <button id="toggle-menu-hide-2" class="button-menu-mobile-2 flex rounded-full md:mr-0 relative">
              <i class="ti ti-chevrons-left top-icon text-3xl"></i>
            </button>
          </div>
        </div>
        <div class="menu-body h-[calc(100vh-60px)] p-4" data-simplebar>
          <div id="Icon-menu">
            <div class="hidden" id="Dashboards" role="tabpanel" aria-labelledby="Dashboards-tab">
              <div class="title-box mb-3">
                <h6 class="text-sm font-medium uppercase text-slate-400">Dashboards</h6>
              </div>
              <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                <li class="nav-item relative block">
                  <a href="index.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Analytics
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="crypto-index.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Crypto
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="crm-index.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    CRM
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="project-index.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Project
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="ecommerce-index.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500  dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Ecommerce
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="helpdesk-index.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500  dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Helpdesk
                  </a>
                </li>
              </ul>
            </div>
            <div class="hidden" id="Apps" role="tabpanel" aria-labelledby="Apps-tab">
              <div class="title-box mb-3">
                <h6 class="text-sm font-medium uppercase text-slate-400">Applications</h6>
              </div>
              <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                <li>
                  <div id="accordion-flush" data-accordion="collapse" data-active-classes=""
                    data-inactive-classes="text-gray-700 hover:text-primary-500 dark:text-gray-400">

                    <div id="Apps-Analytics">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#Analytics-flush" aria-expanded="false" aria-controls="Analytics-flush">
                        <span>Analytics</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Analytics-flush" class="collapse-menu hidden" aria-labelledby="Apps-Analytics">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">

                        <li class="nav-item relative block">
                          <a href="analytics-customers.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Customers
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="analytics-reports.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Reports
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="Apps-Crypto">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#Crypto-flush" aria-expanded="false" aria-controls="Crypto-flush">
                        <span>Crypto</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Crypto-flush" class="collapse-menu hidden" aria-labelledby="Apps-Crypto">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="crypto-exchange.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Exchange
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="crypto-wallet.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Wallet
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="crypto-news.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Crypto News
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="crypto-ico.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            ICO List
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="crypto-settings.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Settings
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="Apps-CRM">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#CRM-flush" aria-expanded="false" aria-controls="CRM-flush">
                        <span>CRM</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="CRM-flush" class="collapse-menu hidden" aria-labelledby="Apps-CRM">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="crm-contacts.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Contacts
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="crm-opportunities.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Opportunities
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="crm-leads.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Leads
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="crm-customers.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Customers
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="Apps-Projects">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#Projects-flush" aria-expanded="false" aria-controls="Projects-flush">
                        <span>Projects</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Projects-flush" class="collapse-menu hidden" aria-labelledby="Apps-Projects">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="projects-clients.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Clients
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="projects-team.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Team
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="projects-project.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Projects
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="projects-task.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Tasks
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="projects-kanban-board.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Kanban Board
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="projects-chat.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Chat
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="projects-users.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Users
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="projects-create.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Project Create
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="Apps-Ecommerce">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#Ecommerce-flush" aria-expanded="false" aria-controls="Ecommerce-flush">
                        <span>Ecommerce</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Ecommerce-flush" class="collapse-menu hidden" aria-labelledby="Apps-Ecommerce">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="ecommerce-products.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Products
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ecommerce-product-list.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Product List
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ecommerce-product-detail.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Product Detail
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ecommerce-cart.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Cart
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ecommerce-checkout.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Chackout
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="Apps-Helpdesk">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer "
                        data-accordion-target="#Helpdesk-flush" aria-expanded="false" aria-controls="Helpdesk-flush">
                        <span>Helpdesk</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Helpdesk-flush" class="collapse-menu hidden" aria-labelledby="Apps-Helpdesk">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="helpdesk-tickets.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Tickets
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="helpdesk-reports.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Reports
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="helpdesk-agents.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Agents
                          </a>
                        </li>
                      </ul>
                    </div>


                    <div id="Apps-Email">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#Email-flush" aria-expanded="false" aria-controls="Email-flush">
                        <span>Email</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Email-flush" class="collapse-menu hidden" aria-labelledby="Apps-Email">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="apps-email-inbox.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Inbox
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="apps-email-read.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Read Email
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>

                <li class="nav-item relative block">
                  <a href="apps-chat.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Chat
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="apps-contact-list.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Contact List
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="apps-calendar.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Calendar
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="apps-invoice.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Invoice
                  </a>
                </li>
              </ul>
            </div>
            <div class="hidden" id="Uikit" role="tabpanel" aria-labelledby="Uikit-tab">
              <div class="title-box mb-3">
                <h6 class="text-sm font-medium uppercase text-slate-400">UI Kit</h6>
              </div>
              <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                <li class="nav-item relative block">
                  <div id="UI-flush" data-accordion="collapse" data-active-classes=""
                    data-inactive-classes="text-gray-700 hover:text-primary-500 dark:text-gray-400">

                    <div id="UIKit-Elements">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#UI-Elements" aria-expanded="false" aria-controls="UI-Elements">
                        <span>UI Elements</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="UI-Elements" class="collapse-menu hidden" aria-labelledby="UIKit-Elements">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="ui-alerts.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Alerts
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-avatar.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Avatar
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-buttons.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Buttons
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-badges.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Badges
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-cards.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Crads
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-carousels.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Carousels
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-dropdowns.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Dropdowns
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-grids.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Grids
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-images.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Images
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-lists.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Lists
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-modals.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Modals
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-navs.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Navs
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-navbar.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Navbar
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-paginations.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Paginations
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-popover-tooltips.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Popover & Tooltips
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-progress.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Progress
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-spinners.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Spinners
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-tabs-accordions.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Tabs & Accordions
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-typography.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Typography
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="ui-videos.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Videos
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="UIKit-Advanced">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#AdvancedUI-flush" aria-expanded="false"
                        aria-controls="AdvancedUI-flush">
                        <span>Advanced UI</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="AdvancedUI-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Advanced">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="advanced-animation.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Animation
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="advanced-clipboard.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Clip Board
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="advanced-dragula.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Dragula
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="advanced-files.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            File Manager
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="advanced-highlight.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Highlight
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="advanced-rangeslider.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Range Slider
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="advanced-ratings.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Ratings
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="advanced-ribbons.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Ribbons
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="advanced-sweetalerts.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Sweet Alerts
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="UIKit-Forms">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#Forms-flush" aria-expanded="false" aria-controls="Forms-flush">
                        <span>Forms</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Forms-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Forms">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="forms-elements.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Basic Elements
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="forms-advance.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Advance Elements
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="forms-validation.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Validation
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="forms-wizard.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Wizard
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="forms-editors.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Editors
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="forms-uploads.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            File Upload
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="forms-img-crop.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Image Crop
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="UIKit-Charts">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#Charts-flush" aria-expanded="false" aria-controls="Charts-flush">
                        <span>Charts</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Charts-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Charts">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="charts-apex.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Apex
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="charts-echarts.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Echarts
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="charts-justgage.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            JustGage
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="charts-chartjs.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Chartjs
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="charts-toast-ui.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Toast
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="UIKit-Tables">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#Tables-flush" aria-expanded="false" aria-controls="Tables-flush">
                        <span>Tables</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Tables-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Tables">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="tables-basic.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Basic
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="tables-datatable.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Datatables
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="tables-editable.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Editable
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="UIKit-Icons">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer "
                        data-accordion-target="#Icons-flush" aria-expanded="false" aria-controls="Icons-flush">
                        <span>Icons</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Icons-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Icons">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="icons-materialdesign.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Material Design
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="icons-fontawesome.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Fontawesome
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="icons-tabler.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Tabler
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="icons-feather.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Feather
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div id="UIKit-Maps">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500  font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#Maps-flush" aria-expanded="false" aria-controls="Maps-flush">
                        <span>Maps</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Maps-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Maps">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="maps-google.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Google Maps
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="maps-leaflet.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Leaflet Maps
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="maps-vector.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Vector Maps
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div id="UIKit-Email-Templates">
                      <a href="#"
                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                        data-accordion-target="#Email-Templates-flush" aria-expanded="false"
                        aria-controls="Email-Templates-flush">
                        <span>Email Templates</span>
                        <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                          data-accordion-icon></i>
                      </a>
                    </div>
                    <div id="Email-Templates-flush" class="collapse-menu hidden"
                      aria-labelledby="UIKit-Email-Templates">
                      <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                        <li class="nav-item relative block">
                          <a href="email-templates-basic.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Basic Action Email
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="email-templates-alert.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Alert Email
                          </a>
                        </li>
                        <li class="nav-item relative block">
                          <a href="email-templates-billing.html"
                            class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                            Billing Email
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="hidden" id="Pages" role="tabpanel" aria-labelledby="Pages-tab">
              <div class="title-box mb-3">
                <h6 class="text-sm font-medium uppercase text-slate-400">Pages</h6>
              </div>
              <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                <li class="nav-item relative block">
                  <a href="pages-profile.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Profile
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="pages-tour.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Tour
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="pages-timeline.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Timeline
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="pages-treeview.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Treeview
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="pages-starter.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Starter Page
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="pages-pricing.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Pricing
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="pages-blogs.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Blogs
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="pages-faq.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    FAQs
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="pages-gallery.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Gallery
                  </a>
                </li>
              </ul>
            </div>
            <div class="hidden" id="Authentication" role="tabpanel" aria-labelledby="Authentication-tab">
              <div class="title-box mb-3">
                <h6 class="text-sm font-medium uppercase text-slate-400">Authentication</h6>
              </div>
              <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                <li class="nav-item relative block">
                  <a href="auth-login.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Login
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-login-alt.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Login-alt
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-register.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Register
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-register-alt.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Register-alt
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-recover-pw.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Re-Password
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-recover-pw-alt.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Re-Password-alt
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-lock-screen.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Lock Screen
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-lock-screen-alt.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Lock Screen-alt
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-404.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Error 404
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-404-alt.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Error 404-alt
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-500.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Error 500
                  </a>
                </li>
                <li class="nav-item relative block">
                  <a href="auth-500-alt.html"
                    class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                    Error 500-alt
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="fixed ltr:left-0 ltr:right-4 rtl:right-0 rtl:left-4 print:hidden z-50">
    <nav id="topbar" class="topbar border-gray-200  relative ltr:ml-0 rtl:ml-0 ltr:lg:ml-0  rtl:lg:mr-0   ltr:xl:ml-[calc(260px+32px)]  rtl:xl:mr-[calc(260px+32px)] duration-300
             block ">
      <div class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">
        <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4 ml-4 xl:ml-0">
          <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:mr-0 relative">
            <i class="ti ti-chevrons-left text-3xl  top-icon"></i>
          </button>
        </div>
        <div class="flex items-center md:w-[40%] lg:w-[30%] xl:w-[20%]">
          <div class="relative ltr:mr-2 rtl:mr-0 rtl:ml-2 hidden lg:mr-4 md:block lg:block w-full">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center
                    pl-3">
              <i class="ti ti-search text-gray-400 z-10"></i>
            </div>
            <input type="text" id="email-adress-icon" class="block w-full rounded-lg border border-slate-200 dark:border-slate-700/60 bg-slate-200/10 p-2
                    pl-10 text-slate-600 dark:text-slate-400 outline-none focus:border-slate-300
                    focus:ring-slate-300 dark:bg-slate-800/20 sm:text-sm" placeholder="Search..." />
          </div>
        </div>
        <div class="order-1 ltr:ml-auto rtl:ml-0 rtl:mr-auto flex items-center md:order-2">

          <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4">
            <button id="toggle-theme" class="flex rounded-full md:mr-0 relative">
              <i class="ti ti-moon text-3xl top-icon"></i>
            </button>
          </div>
          <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4 dropdown relative">
            <button type="button" class="dropdown-toggle flex rounded-full md:mr-0" id="Notifications"
              aria-expanded="false" data-dropdown-toggle="navNotifications">
              <i class="ti ti-bell text-3xl top-icon"></i>
            </button>

            <div class="dropdown-menu dropdown-menu-right z-50 my-1 hidden w-64
                    list-none divide-y h-52 divide-gray-100 rounded border-slate-700
                    md:border-white text-base shadow dark:divide-gray-600 bg-white
                    dark:bg-slate-800" id="navNotifications" data-simplebar>
              <ul class="py-1" aria-labelledby="navNotifications">
                <li class="py-2 px-4">
                  <a href="javascript:void(0);" class="dropdown-item">
                    <div class="flex align-items-start">
                      <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3"
                        src="assets/images/users/avatar-2.jpg" alt="logo" />
                      <div class="flex-grow ml-0.5 overflow-hidden">
                        <p class="text-sm font-medium text-gray-800 truncate
                                dark:text-gray-300">Karen Robinson</p>
                        <p class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                          Hey ! i'm available here
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="py-2 px-4">
                  <a href="javascript:void(0);" class="dropdown-item">
                    <div class="flex align-items-start">
                      <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3"
                        src="assets/images/users/avatar-3.jpg" alt="logo" />
                      <div class="flex-grow ml-0.5 overflow-hidden">
                        <p class="text-sm font-medium text-gray-800 truncate
                                dark:text-gray-300">Your order is placed</p>
                        <p class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                          Dummy text of the printing and industry.
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="py-2 px-4">
                  <a href="javascript:void(0);" class="dropdown-item">
                    <div class="flex align-items-start">
                      <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3"
                        src="assets/images/users/avatar-9.jpg" alt="logo" />
                      <div class="flex-grow ml-0.5 overflow-hidden">
                        <p class="text-sm font-medium text-gray-800 truncate
                                dark:text-gray-300">Robert McCray</p>
                        <p class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                          Good Morning!
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="py-2 px-4">
                  <a href="javascript:void(0);" class="dropdown-item">
                    <div class="flex align-items-start">
                      <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3"
                        src="assets/images/users/avatar-6.jpg" alt="logo" />
                      <div class="flex-grow ml-0.5 overflow-hidden">
                        <p class="text-sm font-medium text-gray-800 truncate
                                dark:text-gray-300">Meeting with designers</p>
                        <p class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                          It is a long established fact that a reader.
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="mr-2 lg:mr-0 dropdown relative">
            <button type="button" class="dropdown-toggle flex items-center rounded-full text-sm
                    focus:bg-none focus:ring-0 dark:focus:ring-0 md:mr-0" id="user-profile" aria-expanded="false"
              data-dropdown-toggle="navUserdata">
              <img class="h-8 w-8 rounded-full" src="assets/images/users/avatar-1.jpg" alt="user photo" />
              <span class="ltr:ml-2 rtl:ml-0 rtl:mr-2 hidden text-left xl:block">
                <span class="block font-medium text-slate-600 dark:text-gray-400">Maria Gibson</span>
                <span class="-mt-1 block text-xs text-slate-500 dark:text-gray-500">Admin</span>
              </span>
            </button>

            <div class="dropdown-menu dropdown-menu-right z-50 my-1 hidden list-none
                    divide-y divide-gray-100 rounded border-slate-700 md:border-white
                    text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800" id="navUserdata">
              <div class="py-3 px-4">
                <span class="block text-sm font-medium text-gray-900 dark:text-white">Bonnie
                  Green</span>
                <span class="block truncate text-sm font-normal text-gray-500
                        dark:text-gray-400">name@flowbite.com</span>
              </div>
              <ul class="py-1" aria-labelledby="navUserdata">
                <li>
                  <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>


  <div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div
      class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-276px)] px-4 pt-[54px] duration-300">
      <div class="xl:w-full">
        <div class="flex flex-wrap">
          <div class="flex items-center py-4 w-full">
            <div class="w-full">
              <div class="">
                <div class="flex flex-wrap justify-between">
                  <div class="items-center ">
                    <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">CRM Dashboard</h1>
                    <ol class="list-reset flex text-sm">
                      <li><a href="#" class="text-gray-500">Tailfox</a></li>
                      <li><span class="text-gray-500 mx-2">/</span></li>
                      <li class="text-gray-500">Pages</li>
                      <li><span class="text-gray-500 mx-2">/</span></li>
                      <li class="text-blue-600 hover:text-blue-700">CRM Dashboard</li>
                    </ol>
                  </div>
                  <div class="flex items-center">
                    <button
                      class="px-3 py-2 lg:px-4 bg-blue-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-blue-600">Create
                      New</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--end container-->

      <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 ">

        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
          <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 ">
            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
              <div
                class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                <div class="flex-none md:flex">
                  <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Leads And Vendors</h4>
                  <div class="dropdown inline-block">
                    <button data-dropdown-toggle="dropdown"
                      class="dropdown-toggle px-3 py-1 text-xs font-medium text-gray-500 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-50 hover:text-slate-800 focus:z-10   dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                      type="button">
                      This Month
                      <i class="fas fa-chevron-down text-xs ml-2"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div
                      class="dropdown-menu right-auto md:right-0 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                      <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                          <a href="#"
                            class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                        </li>
                        <li>
                          <a href="#"
                            class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last
                            Week</a>
                        </li>
                        <li>
                          <a href="#"
                            class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last
                            Month</a>
                        </li>
                        <li>
                          <a href="#"
                            class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">This
                            Year</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div><!--end header-title-->
              <div class="flex-auto p-4 relative">
                <div class="flex items-center relative md:absolute">
                  <div class="">
                    <i class="la la-phone self-center text-4xl text-slate-400"></i>
                  </div>
                  <div class="ml-2">
                    <h5 class="dark:text-slate-200 font-medium text-base">76% Deals Successfull <i
                        class="fas fa-check text-green-500"></i></h5>
                    <p tabindex="0" class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">This
                      is a simple hero unit, a simple jumbotron-style component.</p>
                  </div>
                </div>
                <div id="crm-dash" class="apex-charts mt-5"></div>
              </div><!--end card-body-->
            </div> <!--end card-->
            <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4">
              <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                <div class="flex-auto p-4 text-center">
                  <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">64k</h4>
                  <h6 class="text-gray-400 mb-0 font-medium uppercase">Happy Customers</h6>
                </div><!--end card-body-->
              </div> <!--end card-->
              <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                <div class="flex-auto p-4 text-center">
                  <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">10k</h4>
                  <h6 class="text-gray-400 mb-0 font-medium uppercase">New Customers</h6>
                </div><!--end card-body-->
              </div> <!--end card-->
              <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                <div class="flex-auto p-4 text-center">
                  <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">720</h4>
                  <h6 class="text-gray-400 mb-0 font-medium uppercase">New Deals</h6>
                </div><!--end card-body-->
              </div> <!--end card-->
              <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                <div class="flex-auto p-4 text-center">
                  <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">964</h4>
                  <h6 class="text-gray-400 mb-0 font-medium uppercase">New Register</h6>
                </div><!--end card-body-->
              </div> <!--end card-->
            </div>
          </div><!--end col-->
          <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-4">
              <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                <div
                  class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                  <h4 class="font-medium">Monthly Trends</h4>
                </div><!--end header-title-->
                <div class="flex-auto p-4">
                  <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-6">
                      <div id="email_report" class="apex-charts"></div>
                    </div>
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-6 self-center">
                      <ol class="list-none list-inside mb-3">
                        <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i
                            class="fas fa-play mr-2 text-primary-500"></i> Sent</li>
                        <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i
                            class="fas fa-play mr-2 text-sky-400"></i> Opened</li>
                        <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i
                            class="fas fa-play mr-2 text-[#fdb5c8]"></i> Not Opened</li>
                      </ol>
                      <button type="button"
                        class="inline-block focus:outline-none text-slate-600 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-400 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">View
                        Details <i class="mdi mdi-arrow-right"></i></button>
                    </div>
                  </div>
                  <h6
                    class="bg-slate-50 dark:bg-slate-700/40 py-3 px-2 mb-0 rounded-md  text-center text-slate-500 font-medium mt-3">
                    <i class="ti ti-calendar self-center text-lg mr-1"></i>
                    01 January 2022 to 31 December 2022
                  </h6>
                </div><!--end card-body-->
              </div> <!--end card-->
              <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                <div
                  class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                  <h4 class="font-medium">Social Report</h4>
                </div><!--end header-title-->
                <div class="flex-auto p-4">
                  <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 text-center">
                    <div
                      class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 border-b lg:border-b-0 pb-3 lg:pb-0  border-r-0 md:border-r-0 lg:border-r border-dashed dark:border-slate-700">
                      <span class="inline-flex  justify-center items-center h-14 w-14 rounded-full bg-blue-500/10 ">
                        <i class="ti ti-brand-facebook text-blue-500 text-3xl"></i>
                      </span>
                      <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">186k</h4>
                      <h6 class="text-gray-400 mb-0 font-medium uppercase">Followers</h6>
                    </div>
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 self-center">
                      <span class="inline-flex  justify-center items-center h-14 w-14 rounded-full bg-sky-500/10 ">
                        <i class="ti ti-brand-twitter text-sky-400 text-3xl"></i>
                      </span>
                      <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">106k</h4>
                      <h6 class="text-gray-400 mb-0 font-medium uppercase">Followers</h6>
                    </div>
                  </div>
                </div><!--end card-body-->
              </div> <!--end card-->
            </div>

          </div><!--end col-->
        </div><!--end inner-grid-->
        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
          <div class="sm:col-span-12  md:col-span-12 lg:col-span-5 xl:col-span-4 ">
            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
              <div
                class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                <div class="flex-none md:flex">
                  <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Activity</h4>
                  <div class="dropdown inline-block">
                    <button data-dropdown-toggle="dropdown"
                      class="dropdown-toggle px-3 py-1 text-xs font-medium text-gray-500 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-50 hover:text-slate-800 focus:z-10   dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                      type="button">
                      All
                      <i class="fas fa-chevron-down text-xs ml-2"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div
                      class="dropdown-menu right-auto md:right-0 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                      <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                          <a href="#"
                            class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Purchases</a>
                        </li>
                        <li>
                          <a href="#"
                            class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Emails</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div><!--end header-title-->
              <div class="flex-auto p-4 h-[355px]" data-simplebar>
                <div
                  class="flex my-1 relative min-h-[60px] before:absolute before:bottom-0 before:top-[38px] before:left-[16px] before:border-l-2 before:border-slate-200 dark:before:border-slate-700 before:border-dotted">
                  <div class="">
                    <i
                      class="las la-user-clock bg-primary-600/5 text-primary-500 border-white dark:border-slate-800 border-solid border-2 rounded-full flex items-center justify-center h-8 text-lg ml-px w-8 shadow-[0_0_1px_0.25px_rgba(0,0,0,0.6)] dark:shadow-[0_0_1px_0.25px_rgba(225,225,225,0.7)]"></i>
                  </div>
                  <div class="ml-4 w-full">
                    <div class="flex items-center justify-between">
                      <p class="text-sm text-slate-400  w-3/4">
                        <span class="text-slate-600 dark:text-slate-300">Donald</span>
                        updated the status of <a href="" class="text-slate-600 dark:text-slate-300">Refund #1234</a> to
                        awaiting customer response
                      </p>
                      <small class="text-slate-400 text-xs">10 Min ago</small>
                    </div>
                  </div>
                </div>
                <div
                  class="flex my-1 relative min-h-[60px] before:absolute before:bottom-0 before:top-[38px] before:left-[16px] before:border-l-2 before:border-slate-200 dark:before:border-slate-700 before:border-dotted">
                  <div class="">
                    <i
                      class="mdi mdi-timer-off bg-primary-600/5 text-primary-500 border-white dark:border-slate-800 border-solid border-2 rounded-full flex items-center justify-center h-8 text-lg ml-px w-8 shadow-[0_0_1px_0.25px_rgba(0,0,0,0.6)] dark:shadow-[0_0_1px_0.25px_rgba(225,225,225,0.7)]"></i>
                  </div>
                  <div class="ml-4 w-full">
                    <div class="flex items-center justify-between">
                      <p class="text-sm text-slate-400 w-3/4">
                        <span class="text-slate-600 dark:text-slate-300">Lucy Peterson</span>
                        was added to the group, group name is <a href=""
                          class="text-slate-600 dark:text-slate-300">Overtake</a>
                      </p>
                      <small class="text-slate-400 text-xs">50 Min ago</small>
                    </div>
                  </div>
                </div>
                <div
                  class="flex my-1 relative min-h-[60px] before:absolute before:bottom-0 before:top-[38px] before:left-[16px] before:border-l-2 before:border-slate-200 dark:before:border-slate-700 before:border-dotted">
                  <div class="">
                    <img src="assets/images/users/avatar-7.jpg" alt=""
                      class="rounded-full h-8 w-8 flex items-center justify-center ml-px">
                  </div>
                  <div class="ml-4 w-full">
                    <div class="flex items-center justify-between">
                      <p class="text-sm text-slate-400 w-3/4">
                        <span class="text-slate-600 dark:text-slate-300">Joseph Rust</span>
                        opened new showcase <a href="" class="text-slate-600 dark:text-slate-300">Mannat #112233</a>
                        with theme market
                      </p>
                      <small class="text-slate-400 text-xs">01h ago</small>
                    </div>
                  </div>
                </div>
                <div
                  class="flex my-1 relative min-h-[60px] before:absolute before:bottom-0 before:top-[38px] before:left-[16px] before:border-l-2 before:border-slate-200 dark:before:border-slate-700 before:border-dotted">
                  <div class="">
                    <i
                      class="mdi mdi-clock-outline bg-primary-600/5 text-primary-500 border-white dark:border-slate-800 border-solid border-2 rounded-full flex items-center justify-center h-8 text-lg ml-px w-8 shadow-[0_0_1px_0.25px_rgba(0,0,0,0.6)] dark:shadow-[0_0_1px_0.25px_rgba(225,225,225,0.7)]"></i>
                  </div>
                  <div class="ml-4 w-full">
                    <div class="flex items-center justify-between">
                      <p class="text-sm text-slate-400 w-3/4">
                        <span class="text-slate-600 dark:text-slate-300">Donald</span>
                        updated the status of <a href="" class="text-slate-600 dark:text-slate-300">Refund #1234</a> to
                        awaiting customer response
                      </p>
                      <small class="text-slate-400 text-xs">yesterday</small>
                    </div>
                  </div>
                </div>
                <div
                  class="flex my-1 relative min-h-[60px] before:absolute before:bottom-0 before:top-[38px] before:left-[16px] before:border-l-2 before:border-slate-200 dark:before:border-slate-700 before:border-dotted">
                  <div class="">
                    <i
                      class="mdi mdi-alert-outline bg-primary-600/5 text-primary-500 border-white dark:border-slate-800 border-solid border-2 rounded-full flex items-center justify-center h-8 text-lg ml-px w-8 shadow-[0_0_1px_0.25px_rgba(0,0,0,0.6)] dark:shadow-[0_0_1px_0.25px_rgba(225,225,225,0.7)]"></i>
                  </div>
                  <div class="ml-4 w-full">
                    <div class="flex items-center justify-between">
                      <p class="text-sm text-slate-400 w-3/4">
                        <span class="text-slate-600 dark:text-slate-300">Lucy Peterson</span>
                        was added to the group, group name is <a href=""
                          class="text-slate-600 dark:text-slate-300">Overtake</a>
                      </p>
                      <small class="text-slate-400 text-xs">14 Nov 2022</small>
                    </div>
                  </div>
                </div>
                <div
                  class="flex my-1 relative min-h-[60px] before:absolute before:bottom-0 before:top-[38px] before:left-[16px] before:border-l-2 before:border-slate-200 dark:before:border-slate-700 before:border-dotted">
                  <div class="">
                    <img src="assets/images/users/avatar-8.jpg" alt=""
                      class="rounded-full h-8 w-8 flex items-center justify-center ml-px">
                  </div>
                  <div class="ml-4 w-full">
                    <div class="flex items-center justify-between">
                      <p class="text-sm text-slate-400 w-3/4">
                        <span class="text-slate-600 dark:text-slate-300">Joseph Rust</span>
                        opened new showcase <a href="" class="text-slate-600 dark:text-slate-300">Mannat #112233</a>
                        with theme market
                      </p>
                      <small class="text-slate-400 text-xs">15 Nov 2022</small>
                    </div>
                  </div>
                </div>
              </div><!--end card-body-->
            </div> <!--end card-->
          </div><!--end col-->
          <div class="sm:col-span-12  md:col-span-12 lg:col-span-7 xl:col-span-8 ">
            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative overflow-x-hidden">
              <div
                class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                <div class="flex-none md:flex">
                  <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Leads Report</h4>
                  <div class="dropdown inline-block">
                    <button data-dropdown-toggle="dropdown"
                      class="dropdown-toggle px-3 py-1 text-xs font-medium text-gray-500 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-50 hover:text-slate-800 focus:z-10   dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                      type="button">
                      This Month
                      <i class="fas fa-chevron-down text-xs ml-2"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div
                      class="dropdown-menu right-auto md:right-0 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                      <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                          <a href="#"
                            class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                        </li>
                        <li>
                          <a href="#"
                            class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last
                            Week</a>
                        </li>
                        <li>
                          <a href="#"
                            class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last
                            Month</a>
                        </li>
                        <li>
                          <a href="#"
                            class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">This
                            Year</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div><!--end header-title-->
              <div class="grid grid-cols-1 p-4">
                <div class="sm:-mx-6 lg:-mx-8">
                  <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                    <div class=" ">
                      <table class="w-full">
                        <thead class="bg-gray-50 dark:bg-gray-600/20">
                          <tr>
                            <th scope="col"
                              class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                              Lead
                            </th>
                            <th scope="col"
                              class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                              Email
                            </th>
                            <th scope="col"
                              class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                              Phone No
                            </th>
                            <th scope="col"
                              class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                              Company
                            </th>
                            <th scope="col"
                              class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                              Status
                            </th>
                            <th scope="col"
                              class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- 1 -->
                          <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                              <img src="assets/images/users/avatar-1.jpg" alt=""
                                class="mr-2 h-8 rounded-full inline-block">Donald Gardner
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              xyx@gmail.com
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              +123456789
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              Starbucks coffee
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              <span
                                class="bg-indigo-600/5 text-indigo-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">New
                                Lead</span>
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              <a href="#"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                              <a href="#"><i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i></a>
                            </td>
                          </tr>
                          <!-- 2 -->
                          <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                              <img src="assets/images/users/avatar-5.jpg" alt=""
                                class="mr-2 h-8 rounded-full inline-block">Matt Rosales
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              xyx@gmail.com
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              +123456789
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              Starbucks coffee
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              <span
                                class="bg-indigo-600/5 text-indigo-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">New
                                Lead</span>
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              <a href="#"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                              <a href="#"><i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i></a>
                            </td>
                          </tr>
                          <!-- 3 -->
                          <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                              <img src="assets/images/users/avatar-4.jpg" alt=""
                                class="mr-2 h-8 rounded-full inline-block">Michael Hill
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              xyx@gmail.com
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              +123456789
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              Starbucks coffee
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              <span
                                class="bg-red-600/5 text-red-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Lost</span>
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              <a href="#"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                              <a href="#"><i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i></a>
                            </td>
                          </tr>
                          <!-- 4 -->
                          <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                              <img src="assets/images/users/avatar-3.jpg" alt=""
                                class="mr-2 h-8 rounded-full inline-block">Nancy Flanary
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              xyx@gmail.com
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              +123456789
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              Starbucks coffee
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              <span
                                class="bg-sky-600/5 text-sky-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Follow
                                Up</span>
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              <a href="#"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                              <a href="#"><i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i></a>
                            </td>
                          </tr>
                          <!-- 5 -->
                          <tr class="bg-white dark:bg-gray-800">
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                              <img src="assets/images/users/avatar-2.jpg" alt=""
                                class="mr-2 h-8 rounded-full inline-block">Dorothy Key
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              xyx@gmail.com
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              +123456789
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              Starbucks coffee
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              <span
                                class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Converted</span>
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              <a href="#"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                              <a href="#"><i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div><!--end card-body-->
            </div> <!--end card-->
          </div><!--end col-->
        </div><!--end inner-grid-->
        <!-- footer -->
        <div class="absolute bottom-0 left-0 right-0 block print:hidden">
          <div class="">
            <!-- Footer Start -->
            <footer
              class="footer mt-4 rounded-tr-md rounded-tl-md bg-transparent py-4 text-center font-medium text-slate-600 dark:text-slate-400 md:text-left">
              &copy;
              <script>
                var year = new Date(); document.write(year.getFullYear());
              </script>
              Tailfox
              <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">Crafted with <i
                  class="ti ti-heart text-red-500"></i> by
                Mannatthemes</span>
            </footer>
            <!-- end Footer -->
          </div>
        </div>



      </div><!--end container-->
    </div>
  </div>