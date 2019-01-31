<?php

/* platnosci/index.html.twig */
class __TwigTemplate_5c14ba004023b1589d3e6812e56c7c912263af939f197dc58940c1d81d2c08e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "platnosci/index.html.twig", 1);
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
        $__internal_9891dc5dd008ef6895e9ee1ee3c13543de8876c9683805627c3bcdc512beb539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9891dc5dd008ef6895e9ee1ee3c13543de8876c9683805627c3bcdc512beb539->enter($__internal_9891dc5dd008ef6895e9ee1ee3c13543de8876c9683805627c3bcdc512beb539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "platnosci/index.html.twig"));

        $__internal_513723000a771892e156d2fa6cd764e683249a9985b9b5ea3a2d25cc0efa4940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513723000a771892e156d2fa6cd764e683249a9985b9b5ea3a2d25cc0efa4940->enter($__internal_513723000a771892e156d2fa6cd764e683249a9985b9b5ea3a2d25cc0efa4940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "platnosci/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9891dc5dd008ef6895e9ee1ee3c13543de8876c9683805627c3bcdc512beb539->leave($__internal_9891dc5dd008ef6895e9ee1ee3c13543de8876c9683805627c3bcdc512beb539_prof);

        
        $__internal_513723000a771892e156d2fa6cd764e683249a9985b9b5ea3a2d25cc0efa4940->leave($__internal_513723000a771892e156d2fa6cd764e683249a9985b9b5ea3a2d25cc0efa4940_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b3485d00a7cdee14f23ce873c47b71e931d12843bcae1a3d233927dc8ab73b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3485d00a7cdee14f23ce873c47b71e931d12843bcae1a3d233927dc8ab73b3->enter($__internal_0b3485d00a7cdee14f23ce873c47b71e931d12843bcae1a3d233927dc8ab73b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2075ee2deff5f68c454f8b24c5202872f33f32bce5c6c5b55d95bc49a29a765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2075ee2deff5f68c454f8b24c5202872f33f32bce5c6c5b55d95bc49a29a765->enter($__internal_b2075ee2deff5f68c454f8b24c5202872f33f32bce5c6c5b55d95bc49a29a765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Niepołacone faktury i podatki</h1>

    <table>
        <thead>
            <tr>

                <th>Nazwa Kontrahenta/Urzędu</th>
                <th>Opis/Nr Faktury</th>
                <th>Kwota</th>
                <th>Nr Konta</th>
                <th>Projekt</th>
                <th>Termin Płatności</th>
                <th>Opłacone?</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["platnosci"] ?? $this->getContext($context, "platnosci")));
        foreach ($context['_seq'] as $context["_key"] => $context["platnosc"]) {
            // line 21
            echo "
            <tr ";
            // line 22
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_date_format_filter($this->env, $this->getAttribute($context["platnosc"], "terminPlatnosci", array()), "Y-m-d"))) {
                echo "class=\"po_terminie\"";
            }
            echo ">



                <td>
                    ";
            // line 27
            if ($this->getAttribute($context["platnosc"], "urzad", array(), "any", true, true)) {
                // line 28
                echo "
                        ";
                // line 29
                if (($this->getAttribute($context["platnosc"], "urzad", array()) == 1)) {
                    // line 30
                    echo "                            <span>Urząd Skarbowy</span>
                        ";
                } elseif (($this->getAttribute(                // line 31
$context["platnosc"], "urzad", array()) == 2)) {
                    // line 32
                    echo "                            <span>ZUS</span>
                        ";
                } elseif (($this->getAttribute(                // line 33
$context["platnosc"], "urzad", array()) == 3)) {
                    // line 34
                    echo "                            <span>Inne</span>
                        ";
                }
                // line 36
                echo "
                    ";
            }
            // line 38
            echo "
                    ";
            // line 39
            if ($this->getAttribute($this->getAttribute($context["platnosc"], "kontrahent", array(), "any", false, true), "nazwa", array(), "any", true, true)) {
                // line 40
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["platnosc"], "kontrahent", array()), "nazwa", array()), "html", null, true);
                echo "
                    ";
            }
            // line 42
            echo "
                </td>

                <td>
                    ";
            // line 46
            if ($this->getAttribute($context["platnosc"], "opis", array(), "any", true, true)) {
                // line 47
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platnosc"], "opis", array()), "html", null, true);
                echo "
                    ";
            }
            // line 49
            echo "
                    ";
            // line 50
            if ($this->getAttribute($context["platnosc"], "numer", array(), "any", true, true)) {
                // line 51
                echo "                        / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platnosc"], "numer", array()), "html", null, true);
                echo "
                    ";
            }
            // line 53
            echo "
                </td>

                <td>
                    ";
            // line 57
            if ($this->getAttribute($context["platnosc"], "kwota", array(), "any", true, true)) {
                // line 58
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platnosc"], "kwota", array()), "html", null, true);
                echo "
                    ";
            }
            // line 60
            echo "
                    ";
            // line 61
            if ($this->getAttribute($context["platnosc"], "kwotaBrutto", array(), "any", true, true)) {
                // line 62
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platnosc"], "kwotaBrutto", array()), "html", null, true);
                echo "
                    ";
            }
            // line 64
            echo "
                </td>

                <td>

                    ";
            // line 69
            if ($this->getAttribute($context["platnosc"], "kontrahentNrKonta", array(), "any", true, true)) {
                // line 70
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platnosc"], "kontrahentNrKonta", array()), "html", null, true);
                echo "
                    ";
            }
            // line 72
            echo "
                </td>

                <td>

                    ";
            // line 77
            if ($this->getAttribute($context["platnosc"], "projekt", array(), "any", true, true)) {
                // line 78
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platnosc"], "projekt", array()), "html", null, true);
                echo "
                    ";
            }
            // line 80
            echo "
                </td>

                <td>

                    ";
            // line 85
            if ($this->getAttribute($context["platnosc"], "terminPlatnosci", array(), "any", true, true)) {
                // line 86
                echo "                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["platnosc"], "terminPlatnosci", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
                    ";
            }
            // line 88
            echo "
                </td>

                <td>

                    <button type=\"button\">Tak</button>

                </td>



            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platnosc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "    <ul>
        <li>
            <a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_nieprzypisane");
        echo "\">Operacje</a>
        </li>
    </ul>            ";
        // line 106
        echo "                ";
        // line 107
        echo "                ";
        // line 108
        echo "                ";
        // line 109
        echo "                ";
        // line 110
        echo "                ";
        // line 111
        echo "                ";
        // line 112
        echo "                ";
        // line 113
        echo "                ";
        // line 114
        echo "                ";
        // line 115
        echo "                    ";
        // line 116
        echo "                        ";
        // line 117
        echo "                            ";
        // line 118
        echo "                        ";
        // line 119
        echo "                        ";
        // line 120
        echo "                            ";
        // line 121
        echo "                        ";
        // line 122
        echo "                    ";
        // line 123
        echo "                ";
        // line 124
        echo "            ";
        // line 125
        echo "
        ";
        // line 127
        echo "    ";
        // line 128
        echo "
    ";
        // line 130
        echo "        ";
        // line 131
        echo "            ";
        // line 132
        echo "        ";
        // line 133
        echo "    ";
        
        $__internal_b2075ee2deff5f68c454f8b24c5202872f33f32bce5c6c5b55d95bc49a29a765->leave($__internal_b2075ee2deff5f68c454f8b24c5202872f33f32bce5c6c5b55d95bc49a29a765_prof);

        
        $__internal_0b3485d00a7cdee14f23ce873c47b71e931d12843bcae1a3d233927dc8ab73b3->leave($__internal_0b3485d00a7cdee14f23ce873c47b71e931d12843bcae1a3d233927dc8ab73b3_prof);

    }

    public function getTemplateName()
    {
        return "platnosci/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 133,  292 => 132,  290 => 131,  288 => 130,  285 => 128,  283 => 127,  280 => 125,  278 => 124,  276 => 123,  274 => 122,  272 => 121,  270 => 120,  268 => 119,  266 => 118,  264 => 117,  262 => 116,  260 => 115,  258 => 114,  256 => 113,  254 => 112,  252 => 111,  250 => 110,  248 => 109,  246 => 108,  244 => 107,  242 => 106,  237 => 103,  233 => 101,  215 => 88,  209 => 86,  207 => 85,  200 => 80,  194 => 78,  192 => 77,  185 => 72,  179 => 70,  177 => 69,  170 => 64,  164 => 62,  162 => 61,  159 => 60,  153 => 58,  151 => 57,  145 => 53,  139 => 51,  137 => 50,  134 => 49,  128 => 47,  126 => 46,  120 => 42,  114 => 40,  112 => 39,  109 => 38,  105 => 36,  101 => 34,  99 => 33,  96 => 32,  94 => 31,  91 => 30,  89 => 29,  86 => 28,  84 => 27,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Niepołacone faktury i podatki</h1>

    <table>
        <thead>
            <tr>

                <th>Nazwa Kontrahenta/Urzędu</th>
                <th>Opis/Nr Faktury</th>
                <th>Kwota</th>
                <th>Nr Konta</th>
                <th>Projekt</th>
                <th>Termin Płatności</th>
                <th>Opłacone?</th>
            </tr>
        </thead>
        <tbody>
        {% for platnosc in platnosci %}

            <tr {% if \"now\"|date('Y-m-d') > platnosc.terminPlatnosci|date('Y-m-d') %}class=\"po_terminie\"{%  endif %}>



                <td>
                    {% if platnosc.urzad is defined %}

                        {% if platnosc.urzad == 1 %}
                            <span>Urząd Skarbowy</span>
                        {% elseif platnosc.urzad == 2 %}
                            <span>ZUS</span>
                        {% elseif platnosc.urzad == 3 %}
                            <span>Inne</span>
                        {% endif %}

                    {% endif %}

                    {% if platnosc.kontrahent.nazwa is defined %}
                        {{ platnosc.kontrahent.nazwa }}
                    {% endif %}

                </td>

                <td>
                    {% if platnosc.opis is defined %}
                        {{ platnosc.opis }}
                    {% endif %}

                    {% if platnosc.numer is defined %}
                        / {{ platnosc.numer }}
                    {% endif %}

                </td>

                <td>
                    {% if platnosc.kwota is defined %}
                        {{ platnosc.kwota }}
                    {% endif %}

                    {% if platnosc.kwotaBrutto is defined %}
                        {{ platnosc.kwotaBrutto }}
                    {% endif %}

                </td>

                <td>

                    {% if platnosc.kontrahentNrKonta is defined %}
                        {{ platnosc.kontrahentNrKonta }}
                    {% endif %}

                </td>

                <td>

                    {% if platnosc.projekt is defined %}
                        {{ platnosc.projekt }}
                    {% endif %}

                </td>

                <td>

                    {% if platnosc.terminPlatnosci is defined %}
                        {{ platnosc.terminPlatnosci|date('Y-m-d H:i:s') }}
                    {% endif %}

                </td>

                <td>

                    <button type=\"button\">Tak</button>

                </td>



            </tr>
        {% endfor %}
    <ul>
        <li>
            <a href=\"{{ path('operacje_nieprzypisane') }}\">Operacje</a>
        </li>
    </ul>            {#<td>{{ operacje.type }}</td>#}
                {#<td>{% if operacje.dataOperacji %}{{ operacje.dataOperacji|date('Y-m-d H:i:s') }}{% endif %}</td>#}
                {#<td>{% if operacje.dataKsiegowania %}{{ operacje.dataKsiegowania|date('Y-m-d H:i:s') }}{% endif %}</td>#}
                {#<td>{{ operacje.opisOperacji }}</td>#}
                {#<td>{{ operacje.tytul }}</td>#}
                {#<td>{{ operacje.kontrahent }}</td>#}
                {#<td>{{ operacje.nrKonta }}</td>#}
                {#<td>{{ operacje.kwota }}</td>#}
                {#<td>{{ operacje.saldoPoOperacji }}</td>#}
                {#<td>#}
                    {#<ul>#}
                        {#<li>#}
                            {#<a href=\"{{ path('wyplatygotowkowe_ustaw_kategorie', { 'id': operacje.id }) }}\">Przypisz Kategorie</a>#}
                        {#</li>#}
                        {#<li>#}
                            {#<a href=\"{{ path('wyplatygotowkowe_edit', { 'id': operacje.id }) }}\">Edytuj</a>#}
                        {#</li>#}
                    {#</ul>#}
                {#</td>#}
            {#</tr>#}

        {#</tbody>#}
    {#</table>#}

    {#<ul>#}
        {#<li>#}
            {#<a href=\"{{ path('wyplatygotowkowe_new') }}\">Nowa operacja</a>#}
        {#</li>#}
    {#</ul>#}
{% endblock %}
", "platnosci/index.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\platnosci\\index.html.twig");
    }
}
