@extends('layouts.app')

@section('title', '売上登録')

@section('content')

<div class="max-w-xl mx-auto">

    <div class="mb-6">

        <h1 class="text-2xl font-bold">
            売上登録
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            配達業務の売上を登録します
        </p>

    </div>


    <div class="bg-white rounded-xl shadow-sm p-6">

        <form action="#" method="POST" class="space-y-6">

            @csrf


            {{-- 日付 --}}
            <div>

                <label class="block text-sm font-medium mb-2">
                    日付
                </label>

                <input
                    type="date"
                    name="date"
                    value="2026-09-08"
                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                >

            </div>


            {{-- サービス --}}
            <div>

                <label class="block text-sm font-medium mb-2">
                    配達サービス
                </label>

                <select
                    name="service"
                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                >
                    <option>Amazon</option>
                    <option>Uber</option>
                    <option>出前館</option>
                    <option>その他</option>
                </select>

            </div>


            {{-- 金額 --}}
            <div>

                <label class="block text-sm font-medium mb-2">
                    売上金額
                </label>

                <div class="relative">

                    <span class="absolute left-3 top-3 text-gray-500">
                        ¥
                    </span>

                    <input
                        type="number"
                        name="amount"
                        placeholder="10000"
                        class="w-full rounded-lg border-gray-300 pl-8 focus:border-blue-500 focus:ring-blue-500"
                    >

                </div>

            </div>


            {{-- メモ --}}
            <div>

                <label class="block text-sm font-medium mb-2">
                    メモ
                </label>

                <textarea
                    name="memo"
                    rows="4"
                    placeholder="配達内容など"
                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                ></textarea>

            </div>


            <div class="flex gap-3">

                <a
                    href="#"
                    class="w-1/2 text-center py-3 rounded-lg border border-gray-300 hover:bg-gray-50"
                >
                    キャンセル
                </a>

                <button
                    type="submit"
                    class="w-1/2 bg-blue-600 text-white rounded-lg hover:bg-blue-700"
                >
                    登録する
                </button>

            </div>

        </form>

    </div>

</div>

@endsection