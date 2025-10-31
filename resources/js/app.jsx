import React from 'react';
import { createRoot } from 'react-dom/client';
import './bootstrap';

function Section({ id, title, children }) {
  return (
    <section id={id} className="scroll-mt-24 py-12">
      <h2 className="text-2xl font-semibold mb-4">{title}</h2>
      <div className="space-y-3 text-gray-700">{children}</div>
    </section>
  );
}

function App() {
  return (
    <div className="min-h-screen bg-[#FDFDFC] text-[#1b1b18]">
      <header className="sticky top-0 z-10 bg-white/80 backdrop-blur border-b border-gray-200">
        <div className="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
          <div className="font-semibold">Think Africa</div>
          <nav className="hidden sm:flex gap-4 text-sm">
            <a href="#about" className="hover:text-black text-gray-600">About</a>
            <a href="#vision" className="hover:text-black text-gray-600">Vision</a>
            <a href="#mission" className="hover:text-black text-gray-600">Mission</a>
            <a href="#services" className="hover:text-black text-gray-600">Services</a>
            <a href="#management" className="hover:text-black text-gray-600">Management</a>
            <a href="#contact" className="hover:text-black text-gray-600">Contact</a>
          </nav>
        </div>
      </header>

      <main className="max-w-5xl mx-auto px-4">
        <section id="about" className="py-10 sm:py-14 scroll-mt-24">
          <h1 className="text-3xl sm:text-4xl font-semibold leading-tight">Think Africa — Company Profile</h1>
          <p className="mt-3 text-gray-700 max-w-3xl">
            Think Africa, founded in 2015 and headquartered in Kigali, Rwanda, is a Pan-African advisory firm dedicated to
            policy, regulatory, strategic, and development solutions. We empower governments, private sector, NGOs, and
            communities by addressing systemic barriers and unlocking opportunities for sustainable growth, inclusive
            trade, and social transformation across Africa.
          </p>
          <p className="mt-3 text-gray-700 max-w-3xl">
            Our work integrates policy innovation, market-driven approaches, ESG principles, and community engagement,
            positioning us as a trusted development partner across the continent.
          </p>
        </section>

        <Section id="vision" title="Vision">
          <p>To be the leading Pan-African advisory and development partner, fostering innovation, trade, and sustainability across the continent.</p>
        </Section>

        <Section id="mission" title="Mission">
          <p>To deliver cutting-edge policy, business, and communication solutions that enable stakeholders to achieve transformative, impactful, and sustainable growth.</p>
        </Section>

        <Section id="services" title="Scope of Work & Services">
          <div className="space-y-8">
            <div>
              <h3 className="font-semibold">1) Policy & Regulatory Advisory</h3>
              <ul className="list-disc ml-5 mt-2 space-y-1">
                <li>Policy research & analysis across key growth sectors.</li>
                <li>Advocacy & stakeholder engagement for inclusive policy design.</li>
                <li>Regulatory frameworks: drafting, review, and implementation.</li>
                <li>ESG & compliance: alignment, reporting, and impact measurement.</li>
              </ul>
              <p className="mt-2 text-sm text-gray-600">Impact Focus: Improved policy coherence, strengthened institutions, and inclusive participation.</p>
            </div>
            <div>
              <h3 className="font-semibold">2) Strategic Communications & Branding</h3>
              <ul className="list-disc ml-5 mt-2 space-y-1">
                <li>Corporate communications strategies</li>
                <li>Media relations</li>
                <li>Storytelling & brand positioning</li>
                <li>Event organization (roundtables, conventions, trade shows)</li>
              </ul>
              <p className="mt-2 text-sm text-gray-600">Impact Focus: Stronger public presence, stakeholder trust, and enhanced influence.</p>
            </div>
            <div>
              <h3 className="font-semibold">3) Business & Market Development</h3>
              <ul className="list-disc ml-5 mt-2 space-y-1">
                <li>Export development and trade facilitation</li>
                <li>Contract farming models</li>
                <li>SME capacity building</li>
                <li>Matchmaking platforms</li>
              </ul>
              <p className="mt-2 text-sm text-gray-600">Impact Focus: Increased exports and integration into global value chains.</p>
            </div>
            <div>
              <h3 className="font-semibold">4) Legal & Corporate Affairs</h3>
              <ul className="list-disc ml-5 mt-2 space-y-1">
                <li>Business registration & compliance</li>
                <li>Contract drafting & negotiations</li>
                <li>Corporate governance advisory</li>
                <li>Due diligence & investigations</li>
              </ul>
              <p className="mt-2 text-sm text-gray-600">Impact Focus: Reduced legal risks and stronger governance systems.</p>
            </div>
            <div>
              <h3 className="font-semibold">5) Training & Capacity Building</h3>
              <ul className="list-disc ml-5 mt-2 space-y-1">
                <li>Policy analysis training for institutions</li>
                <li>Leadership & governance training</li>
                <li>Educational support services</li>
                <li>Skills transition programs for vulnerable groups</li>
              </ul>
              <p className="mt-2 text-sm text-gray-600">Impact Focus: Strengthened human capital and institutional effectiveness.</p>
            </div>
            <div>
              <h3 className="font-semibold">6) ESG & Sustainable Development Advisory</h3>
              <ul className="list-disc ml-5 mt-2 space-y-1">
                <li>ESG metrics & reporting</li>
                <li>Gender & inclusion strategies</li>
                <li>Sustainable agriculture & tourism</li>
              </ul>
              <p className="mt-2 text-sm text-gray-600">Impact Focus: Responsible investments and long-term sustainability.</p>
            </div>
            <div>
              <h3 className="font-semibold">7) Tourism & Cultural Enterprises</h3>
              <ul className="list-disc ml-5 mt-2 space-y-1">
                <li>Community-based tourism development</li>
                <li>Agritourism initiatives</li>
                <li>Destination branding & promotion</li>
              </ul>
              <p className="mt-2 text-sm text-gray-600">Impact Focus: Diversified rural livelihoods and preservation of cultural heritage.</p>
            </div>
          </div>
        </Section>

        <Section id="management" title="Management Team">
          <p>
            Think Africa is led by <span className="font-semibold">Ihinda Innocent Ninsiima</span>, a Policy and Regulatory Affairs professional with over 10 years of experience across Rwanda, DRC, Kenya, and Togo in:
          </p>
          <ul className="list-disc ml-5 space-y-1">
            <li>Legal & corporate affairs; policy reforms & strategy development</li>
            <li>ESG & sustainability advisory</li>
            <li>Strategic communications</li>
            <li>International development partnerships</li>
          </ul>
        </Section>

        <Section id="contact" title="Contact Information">
          <div className="grid sm:grid-cols-2 gap-4 text-gray-800">
            <div>
              <div className="font-semibold">Address</div>
              <div>Niboye, Kicukiro, Kigali, Rwanda</div>
            </div>
            <div>
              <div className="font-semibold">Phone</div>
              <div>+250 783 323 024</div>
            </div>
            <div>
              <div className="font-semibold">Email</div>
              <div>innocent250@gmail.com</div>
            </div>
            <div>
              <div className="font-semibold">Managing Partner</div>
              <div>Ihinda Innocent Ninsiima</div>
            </div>
          </div>
        </Section>
      </main>

      <footer className="border-t border-gray-200 mt-8">
        <div className="max-w-5xl mx-auto px-4 py-6 text-sm text-gray-600">© {new Date().getFullYear()} Think Africa. All rights reserved.</div>
      </footer>
    </div>
  );
}

const el = document.getElementById('root');
if (el) {
  const root = createRoot(el);
  root.render(<App />);
}
