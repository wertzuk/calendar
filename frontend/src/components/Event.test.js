/**
 * @vitest-environment happy-dom
 */

import { mount, shallowMount, createLocalVue } from '@vue/test-utils';
import VueRouter from 'vue-router';
import { describe, expect, it } from 'vitest';

import Event from './Event.vue';

const event = {
  id: 1,
  name: 'Deutsche Meisterschaft der Amateure',
  category: 'Klassisch',
  city: 'Trier',
  mode: '9 Runden',
  time: '2h/40 Züge',
  start_date: '15/01/2023',
  end_date: '20/01/2023',
  location: 'Ibis Hotel',
};

const options = {
  propsData: { event },
  global: {
    stubs: ['router-link', 'router-view'],
  },
};

describe('Event', () => {
  it('should render', () => {
    const wrapper = shallowMount(Event, options);
    expect(wrapper).toBeTruthy();
  });

  it('should show the start date', async () => {
    const wrapper = shallowMount(Event, options);
    const elem = await wrapper.find('span');
    expect(elem.text()).toBe('15/01/2023');
  });
});
