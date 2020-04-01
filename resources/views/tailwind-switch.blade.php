<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://tailwindui.com/css/app.css?id=94c2d48d54dfa2faea48" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="h-full">
<div class="flex justify-center items-center h-full">
    <div class="p-1 border-2 border-solid border-gray-300 rounded-full">
        <label x-data="toggleSwitch(false)" class="relative inline-block w-16 h-9">
            <input :checked="isOn" id="on_off" name="on_off" class="opacity-0 w-0 h-0" type="checkbox">
            <span @click="changeStatus" :class="{ 'bg-blue-200': isOn, 'bg-gray-200': !isOn }" class="absolute cursor-pointer inset-0 rounded-full">
                <span :class="{ 'translate-x-6 ml-1 bg-blue-500': isOn }" class="absolute inline-block left-0 top-0 w-9 h-9 bg-gray-500 rounded-full transition-all duration-300 transform"></span>
            </span>
        </label>
    </div>
    <div class="ml-10">
        <label x-data="toggleSwitch(true)" class="relative inline-block w-16 h-10">
            <input :checked="isOn" id="on_off" name="on_off" class="opacity-0 w-0 h-0" type="checkbox">
            <span @click="changeStatus" :class="{ 'bg-blue-500': isOn, 'bg-gray-300': !isOn }" class="absolute cursor-pointer inset-0 p-1 rounded-full">
                <span :class="{ 'translate-x-6': isOn }" class="inline-block w-8 h-8 bg-white rounded-full transition-all duration-300 transform"></span>
            </span>
        </label>
    </div>
</div>
</body>
<script>
    function toggleSwitch(status) {
        return {
            isOn: status,
            changeStatus() {
                this.isOn = !this.isOn;
            }
        }
    }
</script>
</html>
