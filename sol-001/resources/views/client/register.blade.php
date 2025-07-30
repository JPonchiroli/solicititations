<x-layout>
  <div class="container">
    <h1 class="mb-5">Register</h1>

    <form action="" class="border-1 border-gray-600 rounded-xl p-5 w-4/5">
      <ul>
        <li>
          <input type="text" placeholder="Full name" required="true">
        </li>

        <li>
          <input type="email" placeholder="Email" required="true">
        </li>

        <li>
          <input type="phone" placeholder="Phone" required="true">
        </li>

        <li>
          <input type="text" placeholder="CPF/CNPJ" required="true">
        </li>

        <li>
          <input type="date" required="true">
        </li>

        <li>
          <select name="status" id="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
          </select>
        </li>

        <li class="flex justify-center">
          <button type="submit" class="!w-1/2 bg-blue-400 text-white">Save</button>
        </li>
      </ul>
    </form>

    <div class="w-1/8 mt-5">
      <a href="{{ route('welcome')}}">
        <button>Cancel</button>
      </a>
    </div>
  </div>

</x-layout>
