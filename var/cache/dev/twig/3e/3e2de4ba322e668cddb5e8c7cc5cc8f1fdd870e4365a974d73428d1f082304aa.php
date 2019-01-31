<?php

/* faktury/index.html.twig */
class __TwigTemplate_a5308b56b35c3ae3291b097d9fc7865cc9665a2f0442e2adcbaa68ea8cecc8ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "faktury/index.html.twig", 1);
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
        $__internal_2835e24dd8147f6acea44f85bcb7edfec0535ee1ffe59db2eafe77fc568700df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2835e24dd8147f6acea44f85bcb7edfec0535ee1ffe59db2eafe77fc568700df->enter($__internal_2835e24dd8147f6acea44f85bcb7edfec0535ee1ffe59db2eafe77fc568700df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "faktury/index.html.twig"));

        $__internal_a61842064586e090e3b83d397b16c8a0095d799c5741810ec9aedb9766386569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61842064586e090e3b83d397b16c8a0095d799c5741810ec9aedb9766386569->enter($__internal_a61842064586e090e3b83d397b16c8a0095d799c5741810ec9aedb9766386569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "faktury/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2835e24dd8147f6acea44f85bcb7edfec0535ee1ffe59db2eafe77fc568700df->leave($__internal_2835e24dd8147f6acea44f85bcb7edfec0535ee1ffe59db2eafe77fc568700df_prof);

        
        $__internal_a61842064586e090e3b83d397b16c8a0095d799c5741810ec9aedb9766386569->leave($__internal_a61842064586e090e3b83d397b16c8a0095d799c5741810ec9aedb9766386569_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cc586ee3bd5107736cebfdc42c0e90a18a5b2ac20b1b6567bea31eff048c1ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc586ee3bd5107736cebfdc42c0e90a18a5b2ac20b1b6567bea31eff048c1ae->enter($__internal_7cc586ee3bd5107736cebfdc42c0e90a18a5b2ac20b1b6567bea31eff048c1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6d44d2339c2cea441939953eeed6d0ad19309c831e84eb946ae50b42e623780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d44d2339c2cea441939953eeed6d0ad19309c831e84eb946ae50b42e623780->enter($__internal_d6d44d2339c2cea441939953eeed6d0ad19309c831e84eb946ae50b42e623780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Faktury</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Rodzaj</th>
                <th>Nasza firma id</th>
                <th>NIP Kontrahenta</th>
                <th>Nazwa Kontrahenta</th>
                <th>Adres Kontrahenta</th>
                <th>Miasto Kontrahenta</th>
                <th>Kod pocztowy Kontrahenta</th>
                <th>Numer</th>
                <th>Data wystawienia</th>
                <th>Kontrahent nr konta</th>
                <th>Kwota netto</th>
                <th>Kwota brutto</th>
                <th>Kwota vat</th>
                <th>Opis</th>
                <th>Forma platnosci</th>
                <th>Plik skan faktury</th>
                <th>Czy zaplacono</th>
                <th>Działania</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fakturies"] ?? $this->getContext($context, "fakturies")));
        foreach ($context['_seq'] as $context["_key"] => $context["faktury"]) {
            // line 32
            echo "            <tr>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faktury_show", array("id" => $this->getAttribute($context["faktury"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "rodzaj", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "naszaFirmaId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "kontrahentNip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "kontrahentNazwa", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "kontrahentAdres", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "kontrahentMiasto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "kontrahentKodPocztowy", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "numer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["faktury"], "dataWystawienia", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["faktury"], "dataWystawienia", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "kontrahentNrKonta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "kwotaNetto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "kwotaBrutto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "kwotaVat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "opis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "formaPlatnosci", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["faktury"], "plikSkanFaktury", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            if ($this->getAttribute($context["faktury"], "czyZaplacono", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faktury_show", array("id" => $this->getAttribute($context["faktury"], "id", array()))), "html", null, true);
            echo "\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faktury_edit", array("id" => $this->getAttribute($context["faktury"], "id", array()))), "html", null, true);
            echo "\">Edycja</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faktury'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faktury_new");
        echo "\">Nowa faktura</a>
        </li>
    </ul>
";
        
        $__internal_d6d44d2339c2cea441939953eeed6d0ad19309c831e84eb946ae50b42e623780->leave($__internal_d6d44d2339c2cea441939953eeed6d0ad19309c831e84eb946ae50b42e623780_prof);

        
        $__internal_7cc586ee3bd5107736cebfdc42c0e90a18a5b2ac20b1b6567bea31eff048c1ae->leave($__internal_7cc586ee3bd5107736cebfdc42c0e90a18a5b2ac20b1b6567bea31eff048c1ae_prof);

    }

    public function getTemplateName()
    {
        return "faktury/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 68,  186 => 63,  174 => 57,  168 => 54,  157 => 50,  153 => 49,  149 => 48,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  129 => 43,  123 => 42,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  99 => 36,  95 => 35,  91 => 34,  85 => 33,  82 => 32,  78 => 31,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Faktury</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Rodzaj</th>
                <th>Nasza firma id</th>
                <th>NIP Kontrahenta</th>
                <th>Nazwa Kontrahenta</th>
                <th>Adres Kontrahenta</th>
                <th>Miasto Kontrahenta</th>
                <th>Kod pocztowy Kontrahenta</th>
                <th>Numer</th>
                <th>Data wystawienia</th>
                <th>Kontrahent nr konta</th>
                <th>Kwota netto</th>
                <th>Kwota brutto</th>
                <th>Kwota vat</th>
                <th>Opis</th>
                <th>Forma platnosci</th>
                <th>Plik skan faktury</th>
                <th>Czy zaplacono</th>
                <th>Działania</th>
            </tr>
        </thead>
        <tbody>
        {% for faktury in fakturies %}
            <tr>
                <td><a href=\"{{ path('faktury_show', { 'id': faktury.id }) }}\">{{ faktury.id }}</a></td>
                <td>{{ faktury.rodzaj }}</td>
                <td>{{ faktury.naszaFirmaId }}</td>
                <td>{{ faktury.kontrahentNip }}</td>
                <td>{{ faktury.kontrahentNazwa }}</td>
                <td>{{ faktury.kontrahentAdres }}</td>
                <td>{{ faktury.kontrahentMiasto }}</td>
                <td>{{ faktury.kontrahentKodPocztowy }}</td>
                <td>{{ faktury.numer }}</td>
                <td>{% if faktury.dataWystawienia %}{{ faktury.dataWystawienia|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ faktury.kontrahentNrKonta }}</td>
                <td>{{ faktury.kwotaNetto }}</td>
                <td>{{ faktury.kwotaBrutto }}</td>
                <td>{{ faktury.kwotaVat }}</td>
                <td>{{ faktury.opis }}</td>
                <td>{{ faktury.formaPlatnosci }}</td>
                <td>{{ faktury.plikSkanFaktury }}</td>
                <td>{% if faktury.czyZaplacono %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('faktury_show', { 'id': faktury.id }) }}\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"{{ path('faktury_edit', { 'id': faktury.id }) }}\">Edycja</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('faktury_new') }}\">Nowa faktura</a>
        </li>
    </ul>
{% endblock %}
", "faktury/index.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\faktury\\index.html.twig");
    }
}
