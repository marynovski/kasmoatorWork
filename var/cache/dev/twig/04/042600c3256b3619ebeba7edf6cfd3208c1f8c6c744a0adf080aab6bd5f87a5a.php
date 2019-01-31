<?php

/* operacje/index.html.twig */
class __TwigTemplate_30987662efdbaf35d81a6eb7316b5d2d8655c42eb3a1d6dfa2a8ee67b34cbb8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "operacje/index.html.twig", 1);
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
        $__internal_7ab9c9cefa5b18d4caea0fad8c0e68240f9bf2b27988710e2bbec208604b3c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab9c9cefa5b18d4caea0fad8c0e68240f9bf2b27988710e2bbec208604b3c34->enter($__internal_7ab9c9cefa5b18d4caea0fad8c0e68240f9bf2b27988710e2bbec208604b3c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "operacje/index.html.twig"));

        $__internal_1dba2b4e2071b96104ef520dfe2566b1e151c58e523a2b894506028072ed8670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dba2b4e2071b96104ef520dfe2566b1e151c58e523a2b894506028072ed8670->enter($__internal_1dba2b4e2071b96104ef520dfe2566b1e151c58e523a2b894506028072ed8670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "operacje/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ab9c9cefa5b18d4caea0fad8c0e68240f9bf2b27988710e2bbec208604b3c34->leave($__internal_7ab9c9cefa5b18d4caea0fad8c0e68240f9bf2b27988710e2bbec208604b3c34_prof);

        
        $__internal_1dba2b4e2071b96104ef520dfe2566b1e151c58e523a2b894506028072ed8670->leave($__internal_1dba2b4e2071b96104ef520dfe2566b1e151c58e523a2b894506028072ed8670_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37b98a28d2343c91fe2ceb25a0cbcf3f48a95e0b1c816d0108ef4139a9417e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b98a28d2343c91fe2ceb25a0cbcf3f48a95e0b1c816d0108ef4139a9417e25->enter($__internal_37b98a28d2343c91fe2ceb25a0cbcf3f48a95e0b1c816d0108ef4139a9417e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06ce427285aa0c77bdbe31db1995da39bbe2a47f1b29306d6d4381969e9050a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ce427285aa0c77bdbe31db1995da39bbe2a47f1b29306d6d4381969e9050a2->enter($__internal_06ce427285aa0c77bdbe31db1995da39bbe2a47f1b29306d6d4381969e9050a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Operacje</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Dataoperacji</th>
                <th>Dataksiegowania</th>
                <th>Opisoperacji</th>
                <th>Tytul</th>
                <th>Kontrahent</th>
                <th>Nrkonta</th>
                <th>Kwota</th>
                <th>Saldopooperacji</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["operacjes"] ?? $this->getContext($context, "operacjes")));
        foreach ($context['_seq'] as $context["_key"] => $context["operacje"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_show", array("id" => $this->getAttribute($context["operacje"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["operacje"], "dataOperacji", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["operacje"], "dataOperacji", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["operacje"], "dataKsiegowania", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["operacje"], "dataKsiegowania", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "opisOperacji", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "tytul", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "kontrahent", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "nrKonta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "kwota", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "saldoPoOperacji", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_show", array("id" => $this->getAttribute($context["operacje"], "id", array()))), "html", null, true);
            echo "\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_edit", array("id" => $this->getAttribute($context["operacje"], "id", array()))), "html", null, true);
            echo "\">Edytuj</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operacje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_nieprzypisane");
        echo "\">Operacje bez kategorii</a>
        </li>
        <li>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_new");
        echo "\">Nowa operacja</a>
        </li>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_zaladuj_plik");
        echo "\">Nowy wyciąg bankowy</a>
        </li>
    </ul>
";
        
        $__internal_06ce427285aa0c77bdbe31db1995da39bbe2a47f1b29306d6d4381969e9050a2->leave($__internal_06ce427285aa0c77bdbe31db1995da39bbe2a47f1b29306d6d4381969e9050a2_prof);

        
        $__internal_37b98a28d2343c91fe2ceb25a0cbcf3f48a95e0b1c816d0108ef4139a9417e25->leave($__internal_37b98a28d2343c91fe2ceb25a0cbcf3f48a95e0b1c816d0108ef4139a9417e25_prof);

    }

    public function getTemplateName()
    {
        return "operacje/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 58,  157 => 55,  151 => 52,  144 => 47,  132 => 41,  126 => 38,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  93 => 28,  87 => 27,  83 => 26,  77 => 25,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Operacje</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Dataoperacji</th>
                <th>Dataksiegowania</th>
                <th>Opisoperacji</th>
                <th>Tytul</th>
                <th>Kontrahent</th>
                <th>Nrkonta</th>
                <th>Kwota</th>
                <th>Saldopooperacji</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for operacje in operacjes %}
            <tr>
                <td><a href=\"{{ path('operacje_show', { 'id': operacje.id }) }}\">{{ operacje.id }}</a></td>
                <td>{{ operacje.type }}</td>
                <td>{% if operacje.dataOperacji %}{{ operacje.dataOperacji|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if operacje.dataKsiegowania %}{{ operacje.dataKsiegowania|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ operacje.opisOperacji }}</td>
                <td>{{ operacje.tytul }}</td>
                <td>{{ operacje.kontrahent }}</td>
                <td>{{ operacje.nrKonta }}</td>
                <td>{{ operacje.kwota }}</td>
                <td>{{ operacje.saldoPoOperacji }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('operacje_show', { 'id': operacje.id }) }}\">Pokaż</a>
                        </li>
                        <li>
                            <a href=\"{{ path('operacje_edit', { 'id': operacje.id }) }}\">Edytuj</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('operacje_nieprzypisane') }}\">Operacje bez kategorii</a>
        </li>
        <li>
            <a href=\"{{ path('operacje_new') }}\">Nowa operacja</a>
        </li>
        <li>
            <a href=\"{{ path('operacje_zaladuj_plik') }}\">Nowy wyciąg bankowy</a>
        </li>
    </ul>
{% endblock %}
", "operacje/index.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\operacje\\index.html.twig");
    }
}
