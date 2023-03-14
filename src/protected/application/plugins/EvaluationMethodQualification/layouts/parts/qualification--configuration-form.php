<?php

use MapasCulturais\i;
?>
<div ng-controller="QualificationEvaluationMethodConfigurationController" class="qualification-evaluation-configuration registration-fieldset">
    <h4><?php i::_e('Critérios') ?></h4>
    <p><?php i::_e('Configure abaixo os critérios de avaliação de habilitação documental') ?>
    <section id="{{section.id}}" ng-repeat="section in data.sections">
        <header>
            <input ng-model="section.name" placeholder="<?php i::_e('informe o nome da seção') ?>" class="section-name edit" ng-change="save({sections: data.sections})" ng-model-options='{ debounce: data.debounce }'>
            <button ng-if="section.name.trim().length > 0" ng-click="deleteSection(section)" class="btn btn-danger delete alignright"><?php i::_e('Remover seção') ?></button>
            <button ng-if="section.name.trim().length == 0" ng-click="deleteSection(section)" class="btn btn-default delete alignright"><?php i::_e('Cancelar') ?></button>
        </header>

        <table>
            <tr>
                <th>
                    <button ng-click="addCriterion(section)" class="btn btn-default add" title="<?php i::_e('Adicionar critétio') ?>"> <?php i::_e('Adicionar critétio') ?></button>
                </th>
            </tr>

            <tr id="{{cri.id}}" ng-repeat="cri in data.criteria" ng-if="cri.sid == section.id">
                <td class="criterion-title">
                    <select ng-model="cri.fieldId" ng-change="save({sections: data.sections})">
                        <option ng-repeat="field in data.registrationFieldConfigurations" value="{{field.id}}">#{{field.id}} - {{field.title}} </option>
                    </select>
                </td>
                <td>
                    <input type="text" ng-model="cri.description" placeholder="<?php i::_e('Descrição do critério') ?>" class="section-name edit" ng-change="save({sections: data.sections})">
                </td>
                <td>
                    <textarea ng-model="data.options[cri.id]" cols="70" rows="5" ng-change="save({sections: data.sections})"></textarea>
                </td>
                <td>
                    <button ng-click="deleteCriterion(cri)" class="btn btn-danger delete" title="<?php i::_e('Remover critério') ?>"></button>
                </td>
            </tr>
        </table>
    </section>
    <button ng-click="addSection()" class="btn btn-default add"><?php i::_e('Adicionar seção') ?></button>

    <br><br>
    <hr>
</div>