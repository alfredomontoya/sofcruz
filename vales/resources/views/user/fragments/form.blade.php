<div class='row row-cols-md-3 row-cols-lg-4'>

    <div class='form-floating mb-3'>
        <input id='name' name='name' class='form-control {{ $errors->has('name') ? 'is-invalid' : '' }}' type='text' required value='{{  old('name') ?? $user->name ?? ''   }}' placeholder='Nombre completo'>
        <label for='name' class="ps-4 fw-normal">Nombre completo</label>
        @if ($errors->has('$name'))
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
        @else
            <div class="valid-feedback">¡Correcto!</div>
            <div class="invalid-feedback">Valor requerido!</div>
        @endif
    </div>

    <div class='form-floating mb-3'>
        <input id='email' name='email' class='form-control {{ $errors->has('email') ? 'is-invalid' : '' }}' type='text' required value='{{  old('email') ?? $user->email ?? ''   }}' placeholder='Usuario'>
        <label for='email' class="ps-4 fw-normal">Usuario</label>
        @if ($errors->has('$email'))
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
        @else
            <div class="valid-feedback">¡Correcto!</div>
            <div class="invalid-feedback">Valor requerido!</div>
        @endif
    </div>

    <div class='form-floating mb-3'>
        <input id='password' name='password' class='form-control {{ $errors->has('password') ? 'is-invalid' : '' }}' type='text' value='{{  old('password')}}' placeholder='Contraseña'>
        <label for='password' class="ps-4 fw-normal">Contraseña</label>
        @if ($errors->has('$password'))
            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
        @else
            <div class="valid-feedback">¡Correcto!</div>
            <div class="invalid-feedback">Valor requerido!</div>
        @endif
    </div>
    <div class="form-floating mb-3">
        <select
            name="role"
            class="form-select form-select-lg mb-3"
            aria-label="Large select example"
        >
            <option value="user" {{ isset($user->role) && $user->role=='user'? 'selected': ''  }}>Usuario</option>
            <option value="admin" {{ isset($user->role) && $user->role=='admin'? 'selected': '' }}>Administrador</option>
        </select>
        <label for='password' class="ps-4 fw-normal">Seleccionar Rol</label>
    </div>

    {{-- ESTADO --}}
    <div class="form-floating">
        <div class="form-check form-switch">
            <input
                name="estado"
                class="form-check-input"
                {{ (isset($user->estado) && $user->estado==0)? '' : 'checked' }}
                value="1"
                type="checkbox"
                role="switch"
                id="estado"
            >
            <label class="form-check-label" for="estado">Estado usuario</label>
        </div>
    </div>

</div>
