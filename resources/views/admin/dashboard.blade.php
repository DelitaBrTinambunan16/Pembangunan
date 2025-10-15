@extends('layouts.app')

@section('title', 'Dashboard - Pembangunan & Monitoring Proyek Bina Desa')

@section('content')
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

    <aside
        class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <div class="h-19">
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="#">
                <img src="{{ asset('img/logo-ct-dark.png') }}" class="inline h-full max-w-full max-h-8" alt="main_logo" />
                <span class="ml-1 font-semibold">Pembangunan &amp; Monitoring</span>
            </a>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full px-4">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 bg-blue-500/13 text-sm my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700"
                        href="#">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1">Dashboard</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm my-0 mx-2 flex items-center whitespace-nowrap px-4" href="#">Projects</a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl px-6">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 rounded-2xl lg:flex-nowrap lg:justify-start">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <li class="text-sm leading-normal">
                            <a class="text-white opacity-50" href="javascript:;">Pages</a>
                        </li>
                        <li class="text-sm pl-2 capitalize leading-normal text-white before:content-['/']" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="mb-0 font-bold text-white capitalize">Dashboard</h6>
                    <div class="text-sm text-white/80">Sistem Pembangunan & Monitoring Proyek Bina Desa</div>
                </nav>
                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="relative flex flex-wrap items-stretch w-full">
                            <span class="absolute z-50 left-3 top-2 text-slate-500"><i class="fa fa-search"></i></span>
                            <input type="text" class="pl-10 pr-3 py-2 rounded-lg border" placeholder="Type here..." />
                        </div>
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <li class="flex items-center">
                            <a href="#" class="block px-0 py-2 text-sm font-semibold text-white">
                                <i class="fa fa-user sm:mr-1"></i>
                                <span class="hidden sm:inline">{{ session('username') ?? 'Admin' }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- cards -->
        <div class="w-full px-6 py-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 px-3">
                                    <p class="mb-0 text-sm font-semibold uppercase text-slate-500">Proyek Aktif</p>
                                    <h5 class="mb-2 font-bold">12</h5>
                                    <p class="mb-0 text-xs text-slate-400"><span class="text-emerald-500 font-semibold">+3%</span> sejak bulan lalu</p>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                        <i class="ni leading-none ni-money-coins text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 px-3">
                                    <p class="mb-0 text-sm font-semibold uppercase text-slate-500">Proyek Selesai</p>
                                    <h5 class="mb-2 font-bold">34</h5>
                                    <p class="mb-0 text-xs text-slate-400">Sampai sekarang</p>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                        <i class="ni leading-none ni-world text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-full px-3 sm:w-1/2 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 px-3">
                                    <p class="mb-0 text-sm font-semibold uppercase text-slate-500">Anggaran Digunakan</p>
                                    <h5 class="mb-2 font-bold">Rp 1.250.000.000</h5>
                                    <p class="mb-0 text-xs text-slate-400">Periode tahun ini</p>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                        <i class="ni leading-none ni-paper-diploma text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- row: table & categories -->
            <div class="flex flex-wrap mt-6 -mx-3">
                <div class="w-full px-3 lg:w-7/12">
                    <div class="bg-white rounded-2xl p-6 shadow">
                        <h6 class="mb-4">Daftar Proyek</h6>
                        <div class="overflow-x-auto">
                            <table class="items-center w-full mb-4 align-top border-collapse">
                                <thead>
                                    <tr>
                                        <th class="px-2 py-2 text-left">No</th>
                                        <th class="px-2 py-2 text-left">Nama Proyek</th>
                                        <th class="px-2 py-2 text-left">Lokasi</th>
                                        <th class="px-2 py-2 text-left">Status</th>
                                        <th class="px-2 py-2 text-left">Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2">1</td>
                                        <td class="p-2">Pembangunan Jalan Desa A</td>
                                        <td class="p-2">Desa A</td>
                                        <td class="p-2 text-yellow-600">Dalam Proses</td>
                                        <td class="p-2">70%</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">2</td>
                                        <td class="p-2">Rehabilitasi Posyandu Desa B</td>
                                        <td class="p-2">Desa B</td>
                                        <td class="p-2 text-green-600">Selesai</td>
                                        <td class="p-2">100%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="w-full px-3 lg:w-5/12">
                            <div class="relative w-full h-56 overflow-hidden rounded-2xl bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white">
                                <div class="text-center px-6">
                                    <h3 class="text-xl font-bold">Pembangunan & Monitoring</h3>
                                    <p class="text-sm opacity-90">Proyek Bina Desa — Visualisasi & laporan ringkas</p>
                                </div>
                            </div>
                </div>
            </div>
        </div>

        <!-- fixed plugin (optional) -->
        <div fixed-plugin>
            <a fixed-plugin-button class="fixed px-4 py-2 text-xl bg-white shadow-lg cursor-pointer bottom-8 right-8 z-990 rounded-circle text-slate-700">
                <i class="py-2 pointer-events-none fa fa-cog"> </i>
            </a>
        </div>
    </main>

@endsection
