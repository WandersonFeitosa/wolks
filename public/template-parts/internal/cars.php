<section class="cars active_content">
    <div class="cars__manage-cars car-section active-car-section">
        <h1>O que deseja fazer?</h1>
        <p>Selecione uma das opções abaixo para gerenciar os carros</p>

        <div class="cars__button-wrapper">
            <button class="cars__menu-button" data-target=".cars__register-car">Cadastrar carro</button>
            <button class="cars__menu-button" data-target=".cars__update-car">Editar carro</button>
            <button class="cars__menu-button" data-target=".cars__delete-car">Excluir carro</button>
        </div>
    </div>
    <div class="cars__register-car car-section">
        <div class="cars__return"><i class="fas fa-arrow-left"></i> Retornar</div>
        <h1>Cadastrar carro</h1>
        <p>Preencha os campos abaixo para cadastrar um novo carro</p>
        <form action="">
            <div class="cars__register-car__form">

                <div class="cars__register-car__form-item-double">
                    <div>
                        <h2>Modelo:</h2>
                        <input type="text" name="brand" id="brand" placeholder="">
                    </div>
                    <div>
                        <h2>Ano:</h2>
                        <input type="text" name="model" id="model" placeholder="">
                    </div>
                </div>
                <div class="cars__register-car__form-item-double">
                    <div>
                        <h2>Quantidade em estoque:</h2>
                        <input type="text" name="brand" id="brand" placeholder="">
                    </div>
                    <div>
                        <h2>Valor:</h2>
                        <input type="text" name="model" id="model" placeholder="">
                    </div>
                </div>
                <div class="cars__register-car__form-item">
                    <h2>Informações adicionais:</h2>
                    <textarea type="text" name="model" id="model" placeholder="Ex: 1.6 MSI 16V TOTAL FLEX 4P MANUAL"></textarea>
                </div>
                <div class="cars__register-car__form-item">
                    <h2>Imagem:</h2>
                    <input type="file" name="image">
                </div>
                <button type="submit">Cadastrar veículo</button>
            </div>
        </form>
    </div>
    <div class="cars__update-car car-section">
        <div class="cars__return"><i class="fas fa-arrow-left"></i> Retornar</div>
        <form class="select-car-form">
            <select name="" id="">
                <option value="">Selecione um carro para atualizar</option>
            </select>
            <button type="submit">Editar carro</button>
        </form>
    </div>
    <div class="cars__delete-car car-section">
        <div class="cars__return"><i class="fas fa-arrow-left"></i> Retornar</div>
        <form class="select-car-form">
            <select name="" id="">
                <option value="">Selecione um carro para exluir</option>
            </select>
            <button type="submit">Excluir carro</button>
        </form>
    </div>
</section>