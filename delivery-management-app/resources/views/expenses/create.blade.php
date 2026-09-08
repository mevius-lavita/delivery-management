@extends('layouts.app')

@section('title', '経費登録')

@section('content')

<div class="max-w-xl mx-auto">

    <div class="mb-6">

        <h1 class="text-2xl font-bold">
            経費登録
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            配達業務で発生した経費を登録します
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


            {{-- カテゴリー --}}
            <div>

                <label class="block text-sm font-medium mb-2">
                    カテゴリー
                </label>

                <select
                    name="category"
                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                >
                    <option>ガソリン</option>
                    <option>車両メンテナンス</option>
                    <option>保険</option>
                    <option>駐車場</option>
                    <option>通信費</option>
                    <option>その他</option>
                </select>

            </div>


            {{-- 金額 --}}
            <div>

                <label class="block text-sm font-medium mb-2">
                    金額
                </label>

                <div class="relative">

                    <span class="absolute left-3 top-3 text-gray-500">
                        ¥
                    </span>

                    <input
                        type="number"
                        name="amount"
                        placeholder="3000"
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
                    placeholder="経費の内容"
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