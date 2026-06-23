<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Keuangan Bulan {{ now()->translatedFormat('F Y') }}
        </x-slot>

        {{-- <div class="overflow-x-auto rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 text-sm">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700 dark:text-gray-300 w-1/3">
                            Tanggal
                        </th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700 dark:text-gray-300 w-1/3">
                            Pemasukan
                        </th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700 dark:text-gray-300 w-1/3">
                            Pengeluaran
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                    @forelse($this->transaksi as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-900 transition">
                            <td class="px-4 py-3 whitespace-nowrap text-gray-800 dark:text-gray-200">
                                {{ $item['tanggal']->format('d-m-Y') }}
                            </td>
                            <td class="px-4 py-3 text-right whitespace-nowrap text-emerald-600 font-medium">
                                Rp {{ number_format($item['pemasukan'], 0, ',', '.') }}
                            </td>
                            <td class="px-4 py-3 text-right whitespace-nowrap text-rose-600 font-medium">
                                Rp {{ number_format($item['pengeluaran'], 0, ',', '.') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-4 py-6 text-center text-gray-500">
                                Belum ada transaksi
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div> --}}
    </x-filament::section>
</x-filament-widgets::widget>
