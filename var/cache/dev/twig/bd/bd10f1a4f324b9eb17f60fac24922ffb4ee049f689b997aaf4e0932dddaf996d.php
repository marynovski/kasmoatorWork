<?php

/* operacje/ustawKategorie.html.twig */
class __TwigTemplate_9e972e1dbc48b8a8dfd2f295293da470b7bd6b70b5bb6324f0e6d76668d125f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "operacje/ustawKategorie.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe10e2ceb8cc8523e9fc12bbb7f23b979c7abce8542b6e8fc4c32a79791c6a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe10e2ceb8cc8523e9fc12bbb7f23b979c7abce8542b6e8fc4c32a79791c6a68->enter($__internal_fe10e2ceb8cc8523e9fc12bbb7f23b979c7abce8542b6e8fc4c32a79791c6a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "operacje/ustawKategorie.html.twig"));

        $__internal_a3dc90a4bc79c3dc2f152d9ba5fb2e079a7f0646f41258958a26e37e0f80fe79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3dc90a4bc79c3dc2f152d9ba5fb2e079a7f0646f41258958a26e37e0f80fe79->enter($__internal_a3dc90a4bc79c3dc2f152d9ba5fb2e079a7f0646f41258958a26e37e0f80fe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "operacje/ustawKategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe10e2ceb8cc8523e9fc12bbb7f23b979c7abce8542b6e8fc4c32a79791c6a68->leave($__internal_fe10e2ceb8cc8523e9fc12bbb7f23b979c7abce8542b6e8fc4c32a79791c6a68_prof);

        
        $__internal_a3dc90a4bc79c3dc2f152d9ba5fb2e079a7f0646f41258958a26e37e0f80fe79->leave($__internal_a3dc90a4bc79c3dc2f152d9ba5fb2e079a7f0646f41258958a26e37e0f80fe79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5150f2bbd144d79084e9b8f8410ee8eebac1d94db2ef0f460b32fedf17c168af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5150f2bbd144d79084e9b8f8410ee8eebac1d94db2ef0f460b32fedf17c168af->enter($__internal_5150f2bbd144d79084e9b8f8410ee8eebac1d94db2ef0f460b32fedf17c168af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f20ff68e1c150a82c2b728c204460496010369426e5ee094e7ef3cb43b30249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f20ff68e1c150a82c2b728c204460496010369426e5ee094e7ef3cb43b30249->enter($__internal_2f20ff68e1c150a82c2b728c204460496010369426e5ee094e7ef3cb43b30249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dane operacji</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dataoperacji</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "dataOperacji", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "dataOperacji", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Dataksiegowania</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "dataKsiegowania", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "dataKsiegowania", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Opisoperacji</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "opisOperacji", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tytul</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "tytul", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kontrahent</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "kontrahent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nrkonta</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "nrKonta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kwota</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "kwota", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Saldopooperacji</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["operacje"] ?? $this->getContext($context, "operacje")), "saldoPoOperacji", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <form>
        <label for=\"kategoria\">Wybierz kategorie:</label>
        <select id=\"kategoria\">
            <option value=\"1\">Faktura</option>
            <option value=\"2\">Wynagrodzenia</option>
            <option value=\"3\">Podatki</option>
            <option value=\"4\">Opłata Bankowa</option>
        </select>
    </form>

    <div id=\"faktura\">
        FAKTURA
        ";
        // line 64
        echo "        ";
        // line 65
        echo "        ";
        // line 66
        echo "        ";
        // line 67
        echo "    </div>

    <div id=\"wynagrodzenia\">
        WYNAGRODZENIA
        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["wynagrodzenie_form"] ?? $this->getContext($context, "wynagrodzenie_form")), 'form_start');
        echo "
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["wynagrodzenie_form"] ?? $this->getContext($context, "wynagrodzenie_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Przypisz kategorie\" />
        ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["wynagrodzenie_form"] ?? $this->getContext($context, "wynagrodzenie_form")), 'form_end');
        echo "
    </div>

    <div id=\"podatki\">
        PODATKI
    </div>

    <div id=\"oplata_bankowa\">
        OPLATA BANKOWA
        ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["oplata_bankowa_form"] ?? $this->getContext($context, "oplata_bankowa_form")), 'form_start');
        echo "
        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["oplata_bankowa_form"] ?? $this->getContext($context, "oplata_bankowa_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Przypisz kategorie\" />
        ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["oplata_bankowa_form"] ?? $this->getContext($context, "oplata_bankowa_form")), 'form_end');
        echo "
    </div>

    <script>




        \$('#wynagrodzenia').hide();
        \$('#podatki').hide();
        \$('#oplata_bankowa').hide();
        jQuery(document).ready(function (\$) {

            \$(document).on('change', '#kategoria', function() {

                var kategoria = \$('select option:selected').val();

                console.log(\"value\", kategoria);



                if (kategoria == 1) {
                    \$('#faktura').show();
                    \$('#wynagrodzenia').hide();
                    \$('#podatki').hide();
                    \$('#oplata_bankowa').hide();
                } else if (kategoria == 2) {
                    \$('#faktura').hide();
                    \$('#wynagrodzenia').show();
                    \$('#podatki').hide();
                    \$('#oplata_bankowa').hide();
                } else if (kategoria == 3) {
                        \$('#faktura').hide();
                        \$('#wynagrodzenia').hide();
                        \$('#podatki').show();
                        \$('#oplata_bankowa').hide()
                } else if (kategoria == 4) {
                        \$('#faktura').hide();
                        \$('#wynagrodzenia').hide();
                        \$('#podatki').hide();
                        \$('#oplata_bankowa').show();
                }

            }

            )});
    </script>
";
        
        $__internal_2f20ff68e1c150a82c2b728c204460496010369426e5ee094e7ef3cb43b30249->leave($__internal_2f20ff68e1c150a82c2b728c204460496010369426e5ee094e7ef3cb43b30249_prof);

        
        $__internal_5150f2bbd144d79084e9b8f8410ee8eebac1d94db2ef0f460b32fedf17c168af->leave($__internal_5150f2bbd144d79084e9b8f8410ee8eebac1d94db2ef0f460b32fedf17c168af_prof);

    }

    public function getTemplateName()
    {
        return "operacje/ustawKategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 86,  181 => 84,  177 => 83,  165 => 74,  160 => 72,  156 => 71,  150 => 67,  148 => 66,  146 => 65,  144 => 64,  124 => 46,  117 => 42,  110 => 38,  103 => 34,  96 => 30,  89 => 26,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Dane operacji</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ operacje.id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ operacje.type }}</td>
            </tr>
            <tr>
                <th>Dataoperacji</th>
                <td>{% if operacje.dataOperacji %}{{ operacje.dataOperacji|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Dataksiegowania</th>
                <td>{% if operacje.dataKsiegowania %}{{ operacje.dataKsiegowania|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Opisoperacji</th>
                <td>{{ operacje.opisOperacji }}</td>
            </tr>
            <tr>
                <th>Tytul</th>
                <td>{{ operacje.tytul }}</td>
            </tr>
            <tr>
                <th>Kontrahent</th>
                <td>{{ operacje.kontrahent }}</td>
            </tr>
            <tr>
                <th>Nrkonta</th>
                <td>{{ operacje.nrKonta }}</td>
            </tr>
            <tr>
                <th>Kwota</th>
                <td>{{ operacje.kwota }}</td>
            </tr>
            <tr>
                <th>Saldopooperacji</th>
                <td>{{ operacje.saldoPoOperacji }}</td>
            </tr>
        </tbody>
    </table>

    <form>
        <label for=\"kategoria\">Wybierz kategorie:</label>
        <select id=\"kategoria\">
            <option value=\"1\">Faktura</option>
            <option value=\"2\">Wynagrodzenia</option>
            <option value=\"3\">Podatki</option>
            <option value=\"4\">Opłata Bankowa</option>
        </select>
    </form>

    <div id=\"faktura\">
        FAKTURA
        {#{{ form_start(faktura_form) }}#}
        {#{{ form_widget(faktura_form) }}#}
        {#<input type=\"submit\" value=\"Dodaj\" />#}
        {#{{ form_end(faktura_form) }}#}
    </div>

    <div id=\"wynagrodzenia\">
        WYNAGRODZENIA
        {{ form_start(wynagrodzenie_form) }}
        {{ form_widget(wynagrodzenie_form) }}
        <input type=\"submit\" value=\"Przypisz kategorie\" />
        {{ form_end(wynagrodzenie_form) }}
    </div>

    <div id=\"podatki\">
        PODATKI
    </div>

    <div id=\"oplata_bankowa\">
        OPLATA BANKOWA
        {{ form_start(oplata_bankowa_form) }}
        {{ form_widget(oplata_bankowa_form) }}
        <input type=\"submit\" value=\"Przypisz kategorie\" />
        {{ form_end(oplata_bankowa_form) }}
    </div>

    <script>




        \$('#wynagrodzenia').hide();
        \$('#podatki').hide();
        \$('#oplata_bankowa').hide();
        jQuery(document).ready(function (\$) {

            \$(document).on('change', '#kategoria', function() {

                var kategoria = \$('select option:selected').val();

                console.log(\"value\", kategoria);



                if (kategoria == 1) {
                    \$('#faktura').show();
                    \$('#wynagrodzenia').hide();
                    \$('#podatki').hide();
                    \$('#oplata_bankowa').hide();
                } else if (kategoria == 2) {
                    \$('#faktura').hide();
                    \$('#wynagrodzenia').show();
                    \$('#podatki').hide();
                    \$('#oplata_bankowa').hide();
                } else if (kategoria == 3) {
                        \$('#faktura').hide();
                        \$('#wynagrodzenia').hide();
                        \$('#podatki').show();
                        \$('#oplata_bankowa').hide()
                } else if (kategoria == 4) {
                        \$('#faktura').hide();
                        \$('#wynagrodzenia').hide();
                        \$('#podatki').hide();
                        \$('#oplata_bankowa').show();
                }

            }

            )});
    </script>
{% endblock %}
", "operacje/ustawKategorie.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\operacje\\ustawKategorie.html.twig");
    }
}
