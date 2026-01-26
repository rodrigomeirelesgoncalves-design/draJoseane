import { AlertCircle, Brain, HeartCrack, ShieldAlert, Zap, Sparkles } from 'lucide-react';

const Specialties = () => {
  const specialties = [
    {
      icon: AlertCircle,
      title: 'Ansiedade',
      description: 'Tratamento especializado para transtornos de ansiedade, crises de pânico e preocupação excessiva.',
    },
    {
      icon: Brain,
      title: 'Traumas Emocionais',
      description: 'Processamento e superação de experiências traumáticas através de técnicas baseadas em neurociência.',
    },
    {
      icon: HeartCrack,
      title: 'Crises Emocionais',
      description: 'Apoio terapêutico para momentos de instabilidade emocional, ajudando a recuperar o equilíbrio.',
    },
    {
      icon: ShieldAlert,
      title: 'Medos e Insegurança',
      description: 'Trabalho terapêutico para superar medos limitantes e fortalecer a autoconfiança.',
    },
    {
      icon: Zap,
      title: 'Sobrecarga Mental',
      description: 'Estratégias para lidar com estresse, esgotamento e sobrecarga do dia a dia moderno.',
    },
    {
      icon: Sparkles,
      title: 'Transformação Consciente',
      description: 'Processo de autoconhecimento e desenvolvimento pessoal para uma vida mais plena.',
    },
  ];

  return (
    <section id="especialidades" className="section-padding bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <span className="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
            Especialidades
          </span>
          <h2 className="font-serif text-3xl md:text-4xl font-bold text-foreground mb-4">
            Como posso te ajudar
          </h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">
            Ofereço tratamento especializado para diversas questões emocionais, sempre com uma abordagem acolhedora e personalizada.
          </p>
        </div>
        
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          {specialties.map((specialty, index) => (
            <div
              key={index}
              className="bg-card p-6 rounded-xl shadow-sm border border-border hover:shadow-lg hover:border-primary/30 transition-all group"
            >
              <div className="w-14 h-14 mb-4 bg-primary/10 rounded-xl flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                <specialty.icon size={28} className="text-primary" />
              </div>
              <h3 className="font-serif text-xl font-semibold text-foreground mb-3">
                {specialty.title}
              </h3>
              <p className="text-muted-foreground">
                {specialty.description}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Specialties;
