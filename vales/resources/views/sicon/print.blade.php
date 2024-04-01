{{-- tamaño tarjeta 10.2x15.2 cm = 385px x 575px --}}
<div style="width: 575px; height: 385px;">
    {{-- ENCABEZADO ESCUDOS --}}
    <div
        style = "
            width:100%;
            height: 100px;
            display: flex;"
    >
        <div style="width: 80px; height: 100px; background: border-radius: 10px;">
            <img style="width: 60px; height: 50px; padding-left: 10px; padding-top: 10px;" src="{{ asset('images/escudo_bolivia.png') }}" alt="">
            <p style="font-weight: bold; font-size: 6px; text-align: center">ESTADO PLURINACIONAL DE BOLIVIA</p>
        </div>
        <div style="flex-grow: 4;">
            <div style="width: 120px; height: 120px; border-radius: 10px; margin-left: 160px;">
                <img style="width: 100px; height: 100px; padding-left: 10px; padding-top: 10px;" src="https://res.cloudinary.com/alfredomontoya/image/upload/v1690112341/siconqr_mgehxi.png" alt="">
            </div>
        </div>
        <div style="width: 80px; height: 100px; background: border-radius: 10px;">
            <img style="width: 60px; height: 50px; padding-left: 10px; padding-top: 10px;" src="{{ asset('images/escudo_policia.png') }}" alt="">
            <p style="font-weight: bold; font-size: 6px; text-align: center">POLICIA BOLIVIANA</p>
        </div>

    </div>
    {{-- TITULO --}}
    <h1
        style="
            color: #7a0f5a;
            font-size: 23px;
            text-align: center;
            font-weight: bold;
            magin-top: 0px;
        ">
        TARJETA DE IDENFICACIÓN DEL CONDUCTOR
    </h1>

    <div
        style = "
            width:100%;
            height: 150px;
            display: flex;
            "
    >
        <div style="background: rgb(255, 255, 255); width: 150px; height: 150px; border-radius: 10px;">
            <img style="width: 130px; padding-left: 10px;" src="{{ asset('images/foto.jpg') }}" alt="">
        </div>
        <div style="flex-grow: 4; font-size: 12px;">
            <div style="margin-left: 10px;">
                <p><strong>Nombres:</strong>..............................................</p>
                <p><strong>Apellidos:</strong>............................................</p>
                <p><strong>Tipo de Sangre:</strong>............................................</p>
                <p><strong>Motorizado:</strong>............................................</p>
                <p><strong>Sindicato:</strong>............................................</p>
            </div>
        </div>
        <div style="width: 50px;">
            <div style="display: flex; flex-direction: column">
                <div style="font-size: 35px; font-weight: bold; color: black;  background: red; text-align: center; height: 45px; width: 45px; margin: 3px;">12</div>
                <div style="font-size: 35px; font-weight: bold; color: black;  background: yellow; text-align: center; height: 45px; width: 45px; margin: 3px;">13</div>
                <div style="font-size: 35px; font-weight: bold; color: black;  background: green; text-align: center; height: 45px; width: 45px; margin: 3px;">14</div>

            </div>
        </div>
    </div>
    <div style="margin-top: 50px;">
        <p style="margin-bottom: 0px; font-size: 8px; font-weight: bold; text-align: center;">-----------------------------------------------------------------------</p>
        <p style="margin-top: 0px; font-size: 8px; font-weight: bold; text-align: center;">COMANDANTE OPERATIVO DE TRANSITO</p>
    </div>
</div>

