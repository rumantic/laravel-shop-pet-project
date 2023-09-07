<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <div class="flex flex-col text-left m-10">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div
                    class="
                  shadow
                  overflow-hidden
                  border-b border-gray-200
                  sm:rounded-lg
                  "
                >
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th
                                scope="col"
                                class="
                         px-6
                         py-3
                         text-left text-xs
                         font-medium
                         text-gray-500
                         uppercase
                         tracking-wider
                         "
                            >
                                Менеджер
                            </th>
                            <th
                                scope="col"
                                class="
                         px-6
                         py-3
                         text-left text-xs
                         font-medium
                         text-gray-500
                         uppercase
                         tracking-wider
                         "
                            >
                                Направление
                            </th>
                            <th
                                scope="col"
                                class="
                         px-6
                         py-3
                         text-left text-xs
                         font-medium
                         text-gray-500
                         uppercase
                         tracking-wider
                         "
                            >
                                Статус
                            </th>
                            <th
                                scope="col"
                                class="
                         px-6
                         py-3
                         text-left text-xs
                         font-medium
                         text-gray-500
                         uppercase
                         tracking-wider
                         "
                            >
                                Оплата
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @for($i=0; $i < 10; $i++)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img
                                                class="h-10 w-10 rounded-full"
                                                src="https://images.unsplash.com/photo-1619914775389-748e5e136c26?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=100&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjIwMTk4MjAw&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=100"
                                                alt=""
                                            />
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                Иванова З.
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                flora.wu@example.com
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Красноярск-Владивосток</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                <span
                    class="
                             px-2
                             inline-flex
                             text-xs
                             leading-5
                             font-semibold
                             rounded-full
                             bg-green-100
                             text-green-800
                             "
                >
                  В пути
                </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Оплачено
                                </td>
                                <td
                                    class="
                         px-6
                         py-4
                         whitespace-nowrap
                         text-right text-sm
                         font-medium
                         "
                                >
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900"
                                    >Edit</a
                                    >
                                </td>
                            </tr>
                        @endfor

                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{{--

    <livewire:store />
--}}
</div>

