<div class="p-6">
  <h2>じぶん年金シミュレータ</h2>
  {{ Form::open() }}
  <div class="mt-4">
    <x-jet-label value="資金量" for="amount"/>
    <x-jet-input id="amount" class="block mt-1 w-full" :value="old('amount')" required />
  </div>
  <div class="mt-4">
    <x-jet-label value="通貨価格" for="price"/>
    <x-jet-input id="price" class="block mt-1 w-full" :value="old('price')" required />
  </div>
  <div class="mt-4">
    <x-jet-label value="購入ロット数 (1Lot = 10,000通貨)"/>
    <x-jet-input id="lot" class="block mt-1 w-full" :value="old('lot')" required />
  </div>
  <div class="flex items-center justify-end mt-4">
    <x-jet-button class="ml-4">
      {{ __('計算') }}
    </x-jet-button>
  </div>
  {{ Form::close() }}
</div>