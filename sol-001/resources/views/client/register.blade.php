<x-layout>
  <div class="container">
    <h1 class="mb-5">Register</h1>

    <form action="" class="border-1 border-gray-600 rounded-xl p-5 w-2xs">
      <ul>
        <li>
          <input type="text" placeholder="Full name">
        </li>

        <li>
          <input type="email" placeholder="Email">
        </li>

        <li>
          <input type="phone" placeholder="Phone">
        </li>

        <li>
          <input type="text" placeholder="CPF/CNPJ">
        </li>

        <li>
          <input type="date">
        </li>

        <li>
          <select name="status" id="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
          </select>
        </li>

        <li class="flex justify-center">
          <button type="submit" class="!w-1/2">Save</button>
        </li>
      </ul>
    </form>

    <a href="{{ route('welcome')}}">
      <button>Cancel</button>
    </a>
  </div>

</x-layout>
